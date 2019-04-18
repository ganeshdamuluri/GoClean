<?php

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolessSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $data = [
            [
                'id' => '1',
                'name' => 'admin',
                'description' => 'admin',
            ],
        ];



        foreach ($data as $key => $item) {
            $user = Roles::firstOrNew($item);
            $user->deployment()->associate($deployment);
            $user->credential()->associate($credential);
            $user->save();
        }
    }

}
