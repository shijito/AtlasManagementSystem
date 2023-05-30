<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // $validator = Validator::make($request->all(), [
            //     'over_name' => 'required|string|max:10',
            //     'under_name' => 'required|string|max:10',
            //     'over_name_kana' => 'required|string|max:30|/^[ァ-ン]+*$/u',
            //     'under_name_kana' => 'required|string|max:30|/^[ァ-ン]+*$/u',
            //     'mail_address' => 'required|string|email|unique:users|max:100',
            //     'sex' => 'required|in:1,2,3',
            //     'birth_day' => 'required|',
            //     'role' => 'required|in:1,2,3,4',
            //     'password' => 'required|string|between:8,30|confirmed',
            // ]);
            // if($validator->fails()){
            //     return redirect()->back()
            //     ->withErrors($validator);
            // }
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
