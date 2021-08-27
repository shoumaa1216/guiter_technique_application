<?php

use Illuminate\Database\Seeder;

class TechniquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("techniques")->insert(
      [
        [
          'id'=>'1',
          'name'=>'チョーキング',
        ],
        [
          'id'=>'2',
          'name'=>'ビブラート',
        ],
        [
          'id'=>'3',
          'name'=>'ハーモニクス',
        ],
        [
         'id'=>'4',
         'name'=>'ピッキングハーモニクス',
        ],
         [
          'id'=>'5',
          'name'=>'ハーモニクス＆アーミング',
        ],
        [
          'id'=>'6',
          'name'=>'ピックスクラッチ',
        ],
        [
          'id'=>'7',
          'name'=>'ブリッジミュート',
        ],
        [
         'id'=>'8',
         'name'=>'ブラッシング',
        ],
         [
          'id'=>'9',
          'name'=>'半音チョーキング',
        ],
        [
          'id'=>'10',
          'name'=>'ユニゾンチョーキング',
        ],
        [
          'id'=>'11',
          'name'=>'スライド',
        ],
        [
         'id'=>'12',
         'name'=>'トリル',
        ],
        ]
      );
    }
}