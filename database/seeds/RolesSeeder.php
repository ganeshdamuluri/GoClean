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
            [
                'id' => '2',
                'name' => 'business',
                'description' => 'business',
            ],
            [
                'id' => '3',
                'name' => 'user',
                'description' => 'user',
            ]
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        foreach ($data as $key => $item) {
            $role = Roles::firstOrNew($item);
            $role->save();
        }
    }

}
