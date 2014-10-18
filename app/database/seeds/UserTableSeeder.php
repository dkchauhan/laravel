<?php
 
class UserTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vader = DB::table('users')->insert([
                'username'   => 'admin',
                'email'      => 'deepak.leadingedge@gmail.com',
                'password'   => Hash::make('admin'),
                'first_name' => 'deepak',
                'last_name'  => 'Chauhan',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
 
      
    }
 
}