<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ActorsRequest
 * Class FormRequest
 * @package App\Http\Requests
 */
class ActorsRequest extends FormRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}


	/**
	 * Get the validation rules that apply to the request.
	 * Retourne un tableau de validateur par champs
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'firstname' => 'required|min:3|max:50',
            'lastname' => 'required|min:3|max:50',
            'biography' => 'required|min:10|max:5000',
			'dob'        => 'required|date_format:d/m/Y|before:now',
            'recompenses' => 'min:5|max:500',
            'nationality' => 'required',
            'roles' => 'required',
            'image' => 'image',
		];
	}
	/**
	 * Aliaser les label de messages d'erreurs
	 * @return array
	 */
	public function attributes(){
		return [
			'firstname' => 'prénom',
		];

	}

	/**
	 * Set custom messages for validator errors.
	 *
	 * @return array
	 */
	public function messages()
	{
		return [
			'required' => 'Le champ :attribute est obligatoire',
		];
	}


}
