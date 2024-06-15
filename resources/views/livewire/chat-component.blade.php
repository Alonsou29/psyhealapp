<div class="bg-gray-50 rounded-lg shadow border border-gray-200">

    <div class="grid grid-cols-3 divide-x divide-gray-200">

        <div class="col-span-1">
            <div class="bg-gray-100 h-16 flex items-center px-4">
                <img class="w-10 h-10 object-cover object-center" src="{{auth()->user()->profile_photo_path}}" alt="{{auth()->user()->first_name}}">
            </div>
            <div class="bg-white h-14 flex items-center px-4">
                <x-input wire:model.live="search" type="text" class="w-full" placeholder="Buscar.."></x-input>
            </div>
            <div class="h-[calc(100vh-10.5rem)] overflow-auto border-t border-gray-200">
                @if ($this->chats->count()==0 || $search)

                    <div class="px-4 py-3">
                        <h2 class="text-teal-600 text-lg mb-4">Contactos</h2>
                            <ul class="space-y-4">
                                @forelse ($this->contacts as $contact)
                                    <li class="cursor-pointer" wire:click="open_chat_contact({{$contact}})">
                                        <div class="flex">
                                            <figure class="flex-shrink-0">
                                                <img class="h-12 w-12 rounded-full object-cover object-center" src="{{$contact->user->profile_photo_path}}" alt="{{$contact->user->first_name}}">
                                            </figure>

                                            <div class="flex-1 ml-5 border-b border-gray-200">
                                                <p class="text-gray-800">
                                                    {{$contact->user->first_name." ".$contact->user->last_name}}
                                                </p>
                                                <p class="text-gray-500 text-xs">
                                                    {{$contact->user->email}}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                @empty

                                @endforelse
                            </ul>
                    </div>
                @else

                    @foreach ($this->chats as $chatList)
                        <div wire:key="chats-{{$chatList->id}}" wire:click="open_chat({{$chatList}})" class="flex items-center justify-between {{$chat && $chat->id == $chatList->id ? 'bg-gray-200':'bg-white'}} hover:bg-gray-100 cursor-pointer px-3 py-1">
                            <figure>
                                <img class="h-12 w-12 object-center rounded-full" src="{{$chatList->image}}" alt="NA">
                            </figure>

                            <div class="w-[calc(100%-4rem)] py-2 border-b border-gray-200">
                                <div class="flex justify-between items-center">
                                    <p>{{$chatList->nombre}}</p>
                                    <p class="text-xs">{{$chatList->last_mensaje_at->format('h:i A')}}</p>
                                </div>
                                <p class="text-sm text-gray-700 mt-1 truncate">{{$chatList->mensaje->last()->body}}</p>
                            </div>

                        </div>

                    @endforeach

                @endif
            </div>
        </div>

        <div class="col-span-2">
            @if ($contactChat || $chat)
                <div class="bg-gray-100 h-16 flex items-center px-3">
                    <figure>
                        @if ($chat)
                            <img class="w-10 h-10 rounded-full object-cover object-center" src="{{$chat->image}}" alt="{{$chat->nombre}}">
                        @else
                            <img class="w-10 h-10 rounded-full object-cover object-center" src="{{$contactChat->user->profile_photo_path}}" alt="{{$contactChat->user->first_name}}">
                        @endif
                    </figure>
                    <div class="ml-4">
                        <p class="text-gray-800">
                            @if ($chat)
                                {{$chat->nombre}}
                            @else
                                {{$contactChat->user->first_name." ".$contactChat->user->last_name}}
                            @endif
                        </p>
                        <p class="text-green-600 text-xs">
                            En linea
                            {{-- {{$contactChat->user->email}} --}}
                        </p>
                    </div>
                </div>
                <div class="h-[calc(100vh-11rem)] px-2 py-2 overflow-auto">
                    @foreach ( $this->Mensajes as $message )
                        <div class="flex {{$message->user_id == auth()->id() ? 'justify-end' : ''}} mb-2">
                            <div class="rounded px-3 py-2 {{$message->user_id == auth()->id() ? 'bg-blue-100' : 'bg-gray-300 '}}">
                                <p class="text-sm ">{{$message->body}}</p>
                                <p class="{{$message->user_id == auth()->id() ? 'text-right' : ''}}  text-xs text-gray-800 mt-1">{{$message->created_at->format('d-m-y h:i A')}}</p>
                            </div>
                        </div>

                    @endforeach
                        <span id="final"></span>

                </div>
                <form class="bg-gray-100 h-16 flex items-center px-4" wire:submit.prevent="sendMessage()">
                    <x-input type="text" wire:model.live="bodyMessage" class="flex-1" placeholder="Escriba un mensaje aqui"></x-input>
                    <button class="flex-shrink-0 ml-4 text-2xl text-gray-700">
                        <i class="far fa-paper-plane"></i>
                    </button>
                </form>
            @else
                <div class="w-full h-full flex justify-center items-center">
                    <p>AQUI VA IMAGEN DE BIENVENIDA PSYHEAL</p>
                </div>
            @endif
        </div>
    </div>

    @push('js')
        @script
        <script>
            Livewire.on('scroll', function() {
                document.getElementById('final').scrollIntoView(true)});
        </script>
        @endscript
    @endpush
</div>
