<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        $users = [
            [
                'id' => '00000',
                'name' => 'Super Admin',
                'phone_no' => '13923795663',
                'password' => \Illuminate\Support\Facades\Hash::make('SHADOWrion&1229'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('users')->insert($users);
        //$users->assignRole('super-admin');
    }
}
