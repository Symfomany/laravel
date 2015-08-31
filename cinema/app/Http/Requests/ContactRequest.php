<?php

namespace Cinema\Http\Requests;

use Cinema\Http\Requests\Request;

class ContactRequest extends Request
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

    // OPTIONAL OVERRIDE
//    public function forbiddenResponse()
//    {
//        // Optionally, send a custom response on authorize failure
//        // (default is to just redirect to initial page with errors)
//        //
//        // Can return a response, a view, a redirect, or whatever else
//        return Response::make('Permission denied foo!', 403);
//    }
//
//    // OPTIONAL OVERRIDE
//    public function response()
//    {
//        // If you want to customize what happens on a failed validation,
//        // override this method.
//        // See what it does natively here:
//        // https://github.com/laravel/framework/blob/master/src/Illuminate/Foundation/Http/FormRequest.php
//    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//        http://laravel.com/docs/5.0/validation#rule-between
        return [
            'nom' => 'required|min:5|max:20|alpha',
            'email' => 'required|email',
            'texte' => 'required|max:250',
            'image' => 'required|image'
        ];
    }
}
