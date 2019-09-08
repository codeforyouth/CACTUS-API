<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([

            [
                'name'        => 'JavaScript',
                'description' => 'JavaScriptはプログラミング言語であり、ユーザー側のWebブラウザと、Webサイトまたはウェブサービスの相互間のやりとりを、円滑にするために使われています。',
                'img_url'     => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbMgzcUF3KZilqAg0oqCu4Q4NY620ETNp7HoAu44WzCzKhfF7S',
                'color'       => '#ffd83b'
            ],

            [
                'name'        => 'CSS',
                'description' => 'CSS（Cascading Style Sheets、カスケーディング・スタイル・シート）とは、ウェブページのスタイルを指定するための言語です。',
                'img_url'     => 'https://wemo.tech/wp-content/uploads/2017/05/thumb_css.png',
                'color'       => '#2062af'
            ],

            [
                'name'        => 'Ruby',
                'description' => 'Rubyはプログラミング言語の1つです。気軽に楽しくプログラミングできて、しかも実用的です。大きなWebアプリケーションから小さなプログラムまで、さまざまなソフトウェアを作ることができます。',
                'img_url'     => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgNoUIN_v7Si5DTOWJfI0nTT7QrnroNq63q4hDWd2fKU8xk4OKDw',
                'color'       => '#9c1109'
            ],

            [
                'name'        => 'Swift',
                'description' => 'Swiftとは、ネイティブアプリを開発するためのプログラミング言語です。対象としているOSは、MacOSとiOSです。iPhoneやiPadなどの端末で使えるアプリ、もしくはMacパソコン向けのアプリを開発することができます。',
                'img_url'     => 'https://tech-camp.in/note/wp-content/uploads/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88-2017-08-04-17.29.25.png',
                'color'       => '#fe5329'
            ]

        ]);
    }
}
