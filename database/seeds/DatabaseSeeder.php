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
        $this->call(ThemesTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ComponentsTableSeeder::class);
        $this->call(ComponentSectionTableSeeder::class);
        $this->call(ComponentSectionAttributesTableSeeder::class);
    }
}
