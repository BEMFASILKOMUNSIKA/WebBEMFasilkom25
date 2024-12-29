<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramRequest extends FormRequest
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
        $id = (int) $this->get('id');
        $konten = 'required';
        $tanggal = 'required';
        $image = 'image|mimes:jpeg,png,jpg,gif|max:8120';

        if ($this->method() == 'PUT') {
            $judul = 'required|unique:program,judul,' . $id;
            $slug = 'unique:program,slug,' . $id;
            $konten = 'required';
            $tanggal = 'required';
        } else {
            $judul = 'required|unique:program,judul';
            $slug = 'unique:program,slug';
        }

        return [
            'judul' => $judul,
            'slug' => $slug,
            'konten' => $konten,
            'tanggal' => $tanggal,
            'image' => $image,
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'image.max' => 'Ukuran maksimum file harus 2MB.',
            'image.image' => 'File harus berupa gambar.',
        ];
    }
}
