<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksFormRequest extends FormRequest
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
            'title' => 'required|min:1',
            'book_type'=> 'required',
            'book_img'=> 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=350, min_height=237',
            'book_upload'=> 'required|mimes:pdf',

            'book_search'=> 'required|min:2',
            'author'=> 'required|min:2'
        ];
    }
}
