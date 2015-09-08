<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Promotion;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        User::create([
            'facebook_id' => Faker::create()->ean13,
            'name' => Faker::create()->name,
            'profile_pic_url' => 'http://lorempixel.com/150/150',
            'promotion_id' => 1,
            'is_admin' => false,
            'is_bde' => true,
            'is_content_creator' => true,
            'role' => 'Président'
        ]);
        User::create([
            'facebook_id' => Faker::create()->ean13,
            'name' => Faker::create()->name,
            'profile_pic_url' => 'http://lorempixel.com/150/150',
            'promotion_id' => 1,
            'is_admin' => true,
            'is_bde' => true,
            'is_content_creator' => true,
            'role' => 'Péon'
        ]);
        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
