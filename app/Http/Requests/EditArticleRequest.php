<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditArticleRequest extends FormRequest
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
            'art_name'=> 'unique:articles,art_name,'.$this->segment(4).',id'
        ];
    }
    public function messages()
    {
        return [
            'art_name.unique'=>'Tên bài viết bị trùng!'
        ];
    }
}
