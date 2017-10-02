<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' =>"laravel's blog",
            'adress'=>"Tataouine, Tunisia",
            'contact_number' =>"216 23 000 000",
            'contact_email' =>"info@laravel_blog.com"

        ]);
    }
}
