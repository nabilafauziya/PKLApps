<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sample = [
                ['title' => 'Tips Cepat Nikah', 'content'=>'assalaam studio'],
                ['title' => 'Harus nunda nikah?', 'content'=>'assalaam studio'],
                ['title' => 'Membangun visi misi keluarga', 'content'=>'assalaam studio'],

        ];
        DB::table('posts')->insert($sample);
    }
}
