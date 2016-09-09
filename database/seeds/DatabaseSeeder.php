<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Repository;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $repositories;
        $users = factory(User::class, 50)->create();
        for ($i = 0; $i< 500; $i++) {
            $repositories[] = factory(Repository::class)->create([
                'name' => $i.'_'.str_random(10)
            ]);
        }
        foreach ($users as $user) {
            $already = [];
            for ($i = 0; $i < rand(3, 10); $i++) {
                do {  
                    while(in_array( ($key = rand(0,count($repositories))), $already));
                } while (!isset($repositories[$key]));
                $user->repositories()->attach($repositories[$key]->id);
                $already[] = $key;
            }   
        } 
        foreach ($repositories as $repository) {
            $repositoryIds[] = $repository->id;
        } 
    }
}
