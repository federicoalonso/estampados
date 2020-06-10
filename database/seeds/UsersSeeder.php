<?php

use App\User;
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
        User::truncate();
        /* Role::truncate();

        $adminRole = Role::create(['name' => 'Admin']);
        $writerRole = Role::create(['name' => 'Writer']); */

        $admin = new User;
        $admin->name = 'Federico';
        $admin->email = 'f.nicolas.alonso@gmail.com';
        $admin->password = 'Teresa1950';
        $admin->api_token = "asdadfgsdawegtdsfdfs";
        $admin->save();

        /* $writer = new User;
        $writer->name = 'Federico';
        $writer->email = 'elfefo_88@hotmail.com';
        $writer->password = 'Teresa1950';
        $writer->api_token = "asdadfgsdsssawegtdsfdfs";
        $writer->save();

        $admin->assignRole($adminRole);
        $writer->assignRole($writerRole); */
    }
}
