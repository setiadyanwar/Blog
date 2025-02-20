<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'id' => 1,
                'slug' => 'contoh-post-1',
                'title' => 'Contoh Post 1',
                'author' => 'Author 1',
                'body' => 'Ini adalah body dari contoh post 1.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'slug' => 'contoh-post-2',
                'title' => 'Contoh Post 2',
                'author' => 'Author 2',
                'body' => 'Ini adalah body dari contoh post 2.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
