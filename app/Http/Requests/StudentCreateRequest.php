<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
            'nis' => 'unique:students|max:8|required',
            'name' => 'max:60|required',
            'gender' => 'required',
            'class_id' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'nis.required' => 'NIS wajib di isi',
            'name.required' => 'Nama Wajib DI isi',
            'gender.required' => "Di isi Dong Gendernya",
            'nis.max' => 'NIS minimal :max Karakter'
        ];
    }
}