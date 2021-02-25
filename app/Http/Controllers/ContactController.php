<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        $model = new Contact();
        $model->name = $request->input('name');
        $model->email = $request->input('email');
        $model->subject = $request->input('subject');
        $model->message = $request->input('message');
        $model->save();
        return redirect()->route('home')->with('success', 'Success Insert!!!');
    }

    public function allData()
    {
        return view('messages', ['data' => Contact::all()]);
    }

    public function show($id)
    {
        return view('show', ['data' => Contact::find($id)]);
    }

    public function updateMessage($id)
    {
        return view('update', ['data' => Contact::find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $request)
    {
        $model = Contact::find($id);
        $model->name = $request->input('name');
        $model->email = $request->input('email');
        $model->subject = $request->input('subject');
        $model->message = $request->input('message');
        $model->save();
        return redirect()->route('show-one-contact', $id)->with('success', 'Success Update!!!');
    }

    public function delete($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data', $id)->with('success', 'Success Delete!!!');
    }
}
