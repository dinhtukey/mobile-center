<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddArticleRequest extends FormRequest
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
            'art_name'=>'unique:articles,art_name'
        ];
    }
    public function messages()
    {
        return [
            'art_name.unique'=>'Tên bài viết bị trùng!'
        ];
    }
}
