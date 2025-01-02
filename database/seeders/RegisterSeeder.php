<?php

namespace Database\Seeders;
use  App\Models\Register;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\Factory as faker;
class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        $faker = faker::create();
           for($data =1; $data <= 100 ; $data++){
            $Register = new Register();
            $Register->fname = $faker->name;
            $Register->lname =  $faker->name;
            $Register->Email = $faker->email;
            $Register->City = $faker->city;
            $Register->password = $faker->password;
            $Register->Conf_pass = $faker->password;
            $Register->save();
           } ;


    }
}
