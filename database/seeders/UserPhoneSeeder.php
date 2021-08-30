<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Phone;
use App\Models\User;

class UserPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        /*
        $phone = new Phone();
        $phone->phone = "1234567890";
        $user = new User();
        $user->name = "Jennifer";
        $user->email = "jennifer@gmail.com";
        $user->password = encrypt('secret');
        $user->save();
        $user->phone()->save($phone);

        DB::table('phones')->insert([
            [
                'phone'= "1234567890";
            ]
        ]);

        DB::table('questions')->insert([

            [   'survey_id' => Survey::where('title', 'TITLE_OF_YOUR_SURVEY')->first()->id,
                'user_id' =>1,
                'title' => 'One More Time',
                'question_type' => 'radio',
                'option_name' => '["Not at all","Somewhat","Definetly"]'
            ]
        ]);
        */

        //https://laracasts.com/discuss/channels/laravel/setting-a-one-to-many-seeder
    }
}
