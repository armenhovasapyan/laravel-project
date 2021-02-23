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
        return redirect()->route('home')->with('success', 'Success!!!');
    }
}
