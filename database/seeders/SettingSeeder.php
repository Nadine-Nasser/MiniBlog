<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{

    protected $settings = [
        [
            'key'                       =>  'site_name',
            'value'                     =>  'MiniBlog',
        ],
        [
            'key'                       =>  'About Us',
            'value'                     =>  'we are a website that displays miniblog',
        ],
        [
            'key'                       =>  'site_logo',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'site_favicon',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'seo_meta_title',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'seo_meta_description',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'seo_meta_keywords',
            'value'                     =>  '',
        ],
        [

            'key'                       =>  'facebook_link',
            'value'                     =>  '',
        ],
        [

            'key'                       =>  'insta_link',
            'value'                     =>  '',
        ],
        [

            'key'                       =>  'twitter_link',
            'value'                     =>  '',
        ],
        [

            'key'                       =>  'linkedin_link',
            'value'                     =>  '',
        ],

    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting)
        {
            $result = Setting::create($setting);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->settings). ' records');

    }
}
