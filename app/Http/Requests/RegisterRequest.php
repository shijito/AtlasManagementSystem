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
        // $birth_day = $this->input('birth_day', array()); //デフォルト値は空の配列
        $old_year = $this->input('old_year', array()); //年を取得
        $old_month = $this->input('old_month', array()); //月を取得
        $old_day = $this->input('old_day', array()); //日を取得

        // 日付を作成(ex. 2020-1-20)
        // $birth_day_validation = implode('-', $birth_day);
        $data = $old_year . '-' . $old_month . '-' . $old_day;
        $birth_day = date('Y-m-d', strtotime($data));
        // rules()に渡す値を追加でセット
        //     これで、この場で作った変数にもバリデーションを設定できるようになる
        $this->merge([
            'birth_day' => $birth_day,
        ]);

        return parent::getValidatorInstance();
    }
    
     public function rules()
    {
        return [
                'over_name' => 'required|string|max:10',
                'under_name' => 'required|string|max:10',
                'over_name_kana' => 'required|string|max:30|regex:/\A[ァ-ヴー]+\z/u',///^[ァ-ン]+*$/u
                'under_name_kana' => 'required|string|max:30|regex:/\A[ァ-ヴー]+\z/u',///^[ァ-ン]+*$/u
                'mail_address' => 'required|string|email|unique:users|max:100',
                'sex' => 'required|in:1,2,3',
                'birth_day' => 'required|date|after_or_equal:2000-1-1',
                'role' => 'required|in:1,2,3,4',
                'password' => 'required|string|between:8,30|confirmed',
                'password_confirmation' => 'required',
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
            'over_name_kana.regex' => '※全角カナで入力してください。',
            'under_name_kana.required' => '※名前のカナは必ず入力してください。',
            'under_name_kana.max' => '※名前のカナを30文字以内で入力してください。',
            'under_name_kana.regex' => '※全角カナで入力してください。',
            'mail_address.required' => '※メールアドレスは必ず入力してください。',
            'mail_address.max' => '※メールアドレスを100文字以内で入力してください。',
            'mail_address.unique' => '※すでに登録されているメールアドレスは登録できません。',
            'mail_address.email' => '※メールアドレスを入力してください',
            'sex.required' => '※性別は必ず選択してください。',
            'birth_day.required' => '※生年月日は必ず選択してください。',
            'birth_day.after_or_equal' => '※生年月日は2000年1月1日以降を登録してください。',
            'role.required' => '※役職は必ず選択してください。',
            'password.required' => '※パスワードは必ず入力してください。',
            'password.between' => '※パスワードを8～30文字以内で入力してください。',
            'password.confirmed' => '※パスワードが一致していません。',
            'password_confirmation.required' => '※確認パスワード必ず入力してください。'

        ];
    }
}
