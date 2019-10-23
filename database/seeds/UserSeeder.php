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
            0 => [
                'name'             => 'admin',
                'email'          => 'ganeshravitej@gmail.com',
                'role_id'         => '1',
                'mobile_number'   => '1234512345',
                'Address'             => 'hyd',
                'password'    => 'admin@123',
            ],
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        foreach ($data as $key => $value) {
//            $user = new User();
//            $user->name = $value->name;
//            $user->email = $value->email;
//            $user->mobile_number = $value->mobile_number;
//            $user->Address = $value->Address;
//            $user->password = $value->password;
//            $user->save();
            $value['password'] = bcrypt($value['password']);
            $user = User::create($value);
        }
        print_r($value);
    }
}
