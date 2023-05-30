<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainCategoryFormRequest extends FormRequest
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
            'main_category_name' => 'required|unique:main_categories,main_category|max:100',
        ];
    }

    public function messages(){
        return [
            'main_category_name.required' => 'メインカテゴリーは必ず入力してください。',
            'main_category_name.unique' => '登録されているメインカテゴリーは登録できません。',
            'main_category_name.max' => '100文字以内で入力してください。',

        ];
    }
}
