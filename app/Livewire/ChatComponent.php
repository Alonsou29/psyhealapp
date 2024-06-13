<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\Chat;
use App\Models\Mensaje;
use Livewire\Component;

class ChatComponent extends Component
{
    public $search;

    public $contactChat, $chat;

    public $bodyMessage;

    //propiedad computadas

    public function getContactsProperty(){
        return Contact::where('user_id', auth()->id())
        ->when($this->search, function($query){
            $query->where(function($query){
                $query->where('nombre','like','%'.$this->search.'%')->orwhereHas('user', function($query){
                    $query->where('email','like','%'.$this->search.'%');
                });
            });
        })->get() ?? [];
    }

    public function getMensajesProperty(){
        return $this->chat ? Mensaje::where('chat_id',$this->chat->id)->get() : [];
    }

    public function getChatsProperty(){
        return auth()->user()->chats()->get();
    }

    public function render()
    {
        return view('livewire.chat-component')->layout('layouts.chat');
    }

    public function open_chat_contact(Contact $contact){
        $chat=auth()->user()->chats()
        ->whereHas('users',function($query) use ($contact){
            $query->where('users.id', $contact->contact_id);
        })->has('users',2)
        ->first();

        if($chat){
            $this->chat = $chat;
            $this->reset('contactChat','bodyMessage' , 'search');
        }else{
            $this->contactChat = $contact;
            $this->reset('chat','bodyMessage', 'search');
        }
    }

    public function open_chat(Chat $chat){
        $this->chat = $chat;
        $this->reset('contactChat','bodyMessage');
    }

    public function sendMessage(){
        $this->validate([
            'bodyMessage'=>'required',
        ]);

        if(!$this->chat){
            $this->chat=Chat::create();
            $this->chat->users()->attach([auth()->user()->id, $this->contactChat->contact_id]);
        }

        $this->chat->mensaje()->create([
            'body'=>$this->bodyMessage,
            'user_id'=>auth()->user()->id
        ]);

        $this->reset('bodyMessage', 'contactChat');
    }
}

