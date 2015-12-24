<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(ApplicationsTableSeeder::class);
        $this->call(EnvironmentsTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(SuitesTableSeeder::class);
        $this->call(TestcasesTableSeeder::class);
        $this->call(RunsTableSeeder::class);
        $this->call(RunSuiteTableSeeder::class);
        $this->call(SuiteTestcaseTableSeeder::class);

        Model::reguard();
    }
}
