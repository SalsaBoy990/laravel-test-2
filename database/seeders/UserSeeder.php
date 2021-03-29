<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // saves data
        User::factory(3)->create();
        
        /*
        $connection = 'sqlite';
        // only prepares data to be saved in db
        $users = User::factory(3)->make();

        // save in db

        $users->each(function($model) use($connection) {
            // which connection to use
            $model->setConnection($connection);
            $model->save();
        });
        */
    }
}
