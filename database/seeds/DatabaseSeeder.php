<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,1000) as $index){
            DB::table('participants')->insert([
                'lastname' => $faker->lastName,
                'firstname'=> $faker->firstName,
                'contactno' => $faker->phoneNumber,
                'created_at' => $faker->dateTime()->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTime()->format('Y-m-d H:i:s'),
            ]);
        }

        foreach(range(1,100) as $index){
            DB::table('attendances')->insert([
                'participant_idparticipants'=>$faker->numberBetween(1,100),
                'logdatetime'=>$faker->dateTime()->format('Y-m-d H:i:s')
            ]);
        }
    }

    public function down()
    {
        Schema::drop('participants');
    }
}
