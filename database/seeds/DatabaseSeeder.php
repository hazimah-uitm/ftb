<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        // $this->call(PositionSeeder::class);
        $this->call(SuperAdminSeeder::class);
        $this->call(RefreshSuperAdminPermissionSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(CampusSeeder::class);
    }
}
