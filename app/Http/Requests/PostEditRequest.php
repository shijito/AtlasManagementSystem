<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostEditRequest extends FormRequest
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
            'post_title' => 'required|max:100',
            'post_body' => 'required|max:5000',
        ];
    }

    public function messages(){
        return [
            'post_title.required' => '※タイトルを入力してください。',
            'post_title.max' => '※タイトルは50文字以内で入力してください。',
            'post_body.required' => '※内容を入力してください。',
            'post_body.max' =>  '※内容は5000文字以上入力してください。',
        ];
    }
}
