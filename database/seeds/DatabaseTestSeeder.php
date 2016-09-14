<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Repository;

class DatabaseTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $repositories;
        $userA = factory(User::class)->create();
        $userB = factory(User::class)->create();
        $userC = factory(User::class)->create();
        $repositoryA = factory(Repository::class)->create([
                'name' => 'RepoA'
            ]);
        $repositoryB = factory(Repository::class)->create([
                'name' => 'RepoB'
            ]);
        $repositoryC = factory(Repository::class)->create([
                'name' => 'RepoC'
            ]);
        $userA->repositories()->attach($repositoryA->id);
        $userA->repositories()->attach($repositoryB->id);
        $userB->repositories()->attach($repositoryB->id);
        $userB->repositories()->attach($repositoryC->id);
        $userC->repositories()->attach($repositoryC->id);
        
    }
}
