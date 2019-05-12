<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createProfileRequest extends FormRequest
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
            'alamat'=>'required|max:255',
            'nomor_telepon'=>'required|min:12|max:15',
            'nomor_ktp'=>'required|min:16|max:16|unique:profiles',
            'avatar'=>'required|image|mimes:jpg,jpeg,png,gif'
        ];
    }
}
