<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listContact()
    {
        //
        $listContact = Contact::all();
        return view('pages.contact-management.index', [
            'listContacts' => $listContact
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createContact(Request $request)
    {
        $validateData = $request->validate([
            "nama" => "required",
            "contact" => "required",
        ]);
        Contact::create($validateData);
        return redirect()->back()->with("success", "New Contact has been Added!");
        //
    }

    public function updateContact(Request $request)
    {
        //
        $validateData = $request->validate([
            "nama" => "required",
            "contact" => "required",
        ]);
        $contact = Contact::find($request->id);
        $contact->update($validateData);
        return redirect()->back()->with("success", "Contact has been Updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteContact(Request $request)
    {
        //
        Contact::destroy($request->id);
        return redirect()->back()->with("success", "Contact has been Delete!");
    }
}
