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
                'role_id'         => '1',
                'email'          => 'email@email.com',
                'mobile_number'          => '123456',
                'Address'             => 'kepler@email.com',
                'password'    => 1,
            ],
        ];

       

        foreach ($data as $key => $item) {
            $user = User::firstOrNew($item);
            $user->deployment()->associate($deployment);
            $user->credential()->associate($credential);
            $user->save();
            $user->roles()->sync([$role->id]);
        }
    }
}
