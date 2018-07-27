<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         DB::table('employees')->insert([
            'name' => 'sreekanth','email' => 'sree@123.com','dept_id'=>'1','password'=>bcrypt('lol')
        ]);
    DB::table('employees')->insert([
            'name' => 'raju','email' => 'raju@123.com','dept_id'=>'2','password'=>bcrypt('omg')
        ]);

    DB::table('departments')->insert([
            'name' => 'computer'
        ]);

       DB::table('departments')->insert([
            'name' => 'science'
        ]);
        DB::table('salary')->insert([
            'value' => '100','emp_id' => '1'
           
        ]);
          DB::table('salary')->insert([
            'value' => '200','emp_id' => '2'
           
        ]); 
    }
}
