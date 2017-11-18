<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailgunRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return bool|array
     */
    public function rules()
    {
        return [
            'recipient'  => 'string|required',
            'sender'     => 'string|required',
            'subject'    => 'string|required',
            'token'      => 'required|string',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
