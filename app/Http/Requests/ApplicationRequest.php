<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
          'firstname' => 'required|alpha|min:3',
          'lastname' => 'required|alpha|min:3',
          'email' => 'required|email',
          'phone' => 'required|numeric',
          'nominee' => 'required|string',
          'category' => 'required|string',
          'description' => 'required|string|min:100',
          'link' => 'url',
          'attachment*' => 'file|mimes:pdf'
        ];
    }
}
