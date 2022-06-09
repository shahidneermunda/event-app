<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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
        User::create(['name'=>'Shahid','last_name'=>'N','email'=>'admin@admin.com',
            'password'=>bcrypt('admin'),'gender'=>'Male','dateofbirth'=>Carbon::parse('25-10-1993')]);

        $this->call([
            UserSeeder::class,
            EventSeeder::class,
            InvitationSeeder::class,
        ]);
    }
}
