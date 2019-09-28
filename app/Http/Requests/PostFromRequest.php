<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFromRequest extends FormRequest
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
            'post_type'=> 'required',
            'post_img'=> 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=350, min_height=237',
            'post_content'=> 'required|min:20',
            'post_content2'=> 'required|min:20',
            'post_summery'=> 'required|min:20',
            'post_search'=> 'required|min:2',
            'author'=> 'required|min:2'
        ];
    }
}
