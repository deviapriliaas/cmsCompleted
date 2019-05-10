<?php

namespace App\Http\Requests\galeri;

use Illuminate\Foundation\Http\FormRequest;

class VerifyGaleri extends FormRequest
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
            'title'=>'required|max:100',
            'pictgambar'=>'file|mimes:jpg,jpeg,png,gif'
        ];
    }
}
