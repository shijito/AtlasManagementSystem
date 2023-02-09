<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user_test1 = [
                'over_name' => '嗚呼',
                'under_name' => '嗚',
                'over_name_kana' => 'アア',
                'under_name_kana' => 'ア',
                'mail_address' => 'aaa@test.com',
                'sex' => '1',
                'birth_day' => '1900.01.01',
                'role' => '1',
                'password' => 'aaaaaaaa',
        ];
        DB::table('users')->insert($user_test1);

        $user_test2 = [
                'over_name' => '井伊',
                'under_name' => '伊',
                'over_name_kana' => 'イイ',
                'under_name_kana' => 'イ',
                'mail_address' => 'iii@test.com',
                'sex' => '2',
                'birth_day' => '1900.02.02',
                'role' => '2',
                'password' => 'iiiiiiii',
        ];
        DB::table('users')->insert($user_test2);

        $user_test3 = [
                'over_name' => '宇鵜',
                'under_name' => '宇',
                'over_name_kana' => 'ウウ',
                'under_name_kana' => 'ウ',
                'mail_address' => 'uuu@test.com',
                'sex' => '3',
                'birth_day' => '1900.03.03',
                'role' => '3',
                'password' => 'uuuuuuuu',
        ];
        DB::table('users')->insert($user_test3);

        $user_test4 = [
            'over_name' => '得得',
            'under_name' => '絵',
            'over_name_kana' => 'エエ',
            'under_name_kana' => 'エ',
            'mail_address' => 'eee@test.com',
            'sex' => '1',
            'birth_day' => '1900.04.04',
            'role' => '4',
            'password' => 'uuuuuuuu',
        ];
        DB::table('users')->insert($user_test4);
        

    }
}