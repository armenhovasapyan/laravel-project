<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:1|max:5',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:15',
            'message' => 'required|min:15|max:500',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'required',
            'email.required' => 'required',
            'subject.required' => 'required',
            'message.required' => 'required'
        ];
    }
}
