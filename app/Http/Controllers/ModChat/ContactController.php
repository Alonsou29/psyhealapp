<?php

namespace App\Http\Controllers\ModChat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use App\Rules\InvalidEmail;

use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = auth()->user()->contacts()->paginate();

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'email'=> [
                'required','email','exists:users', Rule::notIn([auth()->user()->email]),new InvalidEmail
            ]   
        ]);

        $user = User::where('email', $request->email)->first();

        $contact=Contact::create([
            'nombre'=>$request->nombre,
            'user_id'=>auth()->id(),
            'contact_id'=>$user->id
        ]);

        session()->flash('flash.banner','El contacto se ha creado correctamente');
        session()->flash('flash.bannerStyle','success');

        return redirect()->route('contacts.edit',$contact);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'nombre'=>'required',
            'email'=> [
                'required','email','exists:users', Rule::notIn([auth()->user()->email]),new InvalidEmail($contact->user->email)
            ]   
        ]);

        $user = User::where('email', $request->email)->first();

        $contact->update([
            'nombre'=>$request->nombre,
            'contact_id'=>$user->id
        ]);

        session()->flash('flash.banner','El contacto se ha actualizado correctamente');
        session()->flash('flash.bannerStyle','success');

        return redirect()->route('contacts.edit',$contact);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        session()->flash('flash.banner','El contacto se ha eliminado correctamente');
        session()->flash('flash.bannerStyle','success');
        
        return redirect()->route('contacts.index');
    }
}
