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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    
    public function getValidatorInstance()
    {
        // プルダウンで選択された値(= 配列)を取得
        $birth_day = $this->input('birth_day', array()); //デフォルト値は空の配列

        // 日付を作成(ex. 2020-1-20)
        $birth_day_validation = implode('-', $birth_day);

        // rules()に渡す値を追加でセット
        //     これで、この場で作った変数にもバリデーションを設定できるようになる
        $this->merge([
            'birth_day_validation' => $birth_day_validation,
        ]);

        return parent::getValidatorInstance();
    }
    
     public function rules()
    {
        return [
                'over_name' => 'required|string|max:10',
                'under_name' => 'required|string|max:10',
                'over_name_kana' => 'required|string|max:30',///^[ァ-ン]+*$/u
                'under_name_kana' => 'required|string|max:30',///^[ァ-ン]+*$/u
                'mail_address' => 'required|string|email|unique:users|max:100',
                'sex' => 'required|in:1,2,3',
                'birth_day_validation' => 'required|date',
                'role' => 'required|in:1,2,3,4',
                'password' => 'required|string|between:8,30|confirmed',
        ];
    }

    public function messages(){
        return [
            'over_name' => '※苗字を10文字以内で入力してください。',
            'under_name' => '※名前を10文字以内で入力してください。',
            'over_name_kana' => '※苗字のカナを30文字以内で入力してください。',
            'under_name_kana' => '※名前のカナを30文字以内で入力してください。',
            'mail_address' => '※アドレスを100文字以内で入力してください。',
            'sex' => '※性別を選択してください。',
            'birth_day_validation' => '※生年月日を選択してください。',
            'role' => '※役職を選択してください。',
            'password' => '※パスワードを8～30文字以内で入力してください。',

        ];
    }
}
