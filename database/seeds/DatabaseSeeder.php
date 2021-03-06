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
        $this->call(UsersTableSeeder::class);
        $this->call(ClubsTableSeeder::class);
        $this->call(SeasonsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(CategoryExercisesTableSeeder::class);
        $this->call(WorkoutsTableSeeder::class);
        $this->call(ExercisesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ExerciseTagTableSeeder::class);
    }
}
