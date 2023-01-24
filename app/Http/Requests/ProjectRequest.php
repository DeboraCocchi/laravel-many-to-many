<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:100|min:3',
            'created'=>'required',
            'client_name'=>'required|max:50|min:3',
            'summary'=>'required|min:5'
        ];
    }

    public function messages(){
        return[
            'name.required'=>'Il nome del progetto è un campo obbligatorio',
            'name.min'=>'Il nome del progetto deve contenere almeno :min caratteri',
            'name.max'=>'Il nome del progetto può contenere al massimo :max caratteri',
            'created.required'=>'La data di creazione del progetto è obbligatoria',
            'client_name.required'=>'Il nome del cliente è un campo obbligatorio',
            'client_name.min'=>'Il nome del cliente deve contenere almeno :min caratteri',
            'client_name.max'=>'Il nome del cliente può contenere al massimo :max caratteri',
            'summary.required'=>'La descrizione del progetto è un campo obbligatorio',
            'summary.min'=>'La descrizione del progetto deve contenere almeno :min caratteri'
        ];
    }
}
