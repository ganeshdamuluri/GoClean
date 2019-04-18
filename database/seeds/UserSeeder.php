<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'             => 'admin',
                'email'          => 'ganeshravitej@gmail.com',
                'role_id'         => '1',
                'mobile_number'          => '1234512345',
                'Address'             => 'hyd',
                'password'    => 'admin@123',
            ],
        ];

       

        foreach ($data as $key => $item) {
            $user = User::firstOrNew($item);
            $user->deployment()->associate($deployment);
            $user->credential()->associate($credential);
            $user->save();
        }
    }
}
