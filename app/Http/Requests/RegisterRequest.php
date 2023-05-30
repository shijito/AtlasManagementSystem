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
                'password' => 'required|string|between:8,30',
        ];
    }

    public function messages(){
        return [
            'over_name.required' => '※苗字は必ず入力してください。',
            'over_name.max' => '※苗字を10文字以内で入力してください。',
            'under_name.required' => '※名前は必ず入力してください。',
            'under_name.max' => '※名前を10文字以内で入力してください。',
            'over_name_kana.required' => '※苗字のカナは必ず入力してください。',
            'over_name_kana.max' => '※苗字のカナを30文字以内で入力してください。',
            'under_name_kana.required' => '※名前のカナは必ず入力してください。',
            'under_name_kana.max' => '※名前のカナを30文字以内で入力してください。',
            'mail_address.required' => '※アドレスは必ず入力してください。',
            'mail_address.max' => '※アドレスを100文字以内で入力してください。',
            'mail_address.unique' => '※すでに登録されているアドレスは登録できません。',
            'sex.required' => '※性別は必ず選択してください。',
            'birth_day_validation.required' => '※生年月日は必ず選択してください。',
            'role.required' => '※役職は必ず選択してください。',
            'password.required' => '※パスワードは必ず入力してください。',
            'password.confirmed' => '※パスワードが一致していません。',
            'password.between' => '※パスワードを8～30文字以内で入力してください。',

        ];
    }
}
