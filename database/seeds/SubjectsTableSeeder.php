<?php

use Illuminate\Database\Seeder;
use App\Models\Users\Subjects;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 国語、数学、英語を追加
        
        //「DB::table（テーブル名）->insert」で追加。
        //['カラム名' => '登録したい変数']で登録できる。
        //記載後、DatabaseSeeder.phpに追記が必要
        DB::table('subjects')->insert([
            ['subject' => '国語'],
            ['subject' => '数学'],
            ['subject' => '英語'],
        ]);

    }
}