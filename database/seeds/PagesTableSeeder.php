<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert(
            [
                [
                    'title'     =>  'About Pages',
                    'slug'      =>  'about',
                    'content'   =>  'This is the About Page'
                ],
                [
                    'title'     =>  'Blog Pages',
                    'slug'      =>  'blog',
                    'content'   =>  'This is the Blog Page'
                ],
                [
                    'title'     =>  'Contact Pages',
                    'slug'      =>  'contact',
                    'content'   =>  'This is the Contact Page'
                ],
            ]
            );
    }
}
