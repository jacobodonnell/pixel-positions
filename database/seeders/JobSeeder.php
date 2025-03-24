<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(15)->create();

        Job::factory(20)->create(new Sequence(
            ['featured' => false],
            ['featured' => false],
            ['featured' => false],
            ['featured' => false],
            ['featured' => true]
        ))->each(function ($job) use ($tags) {
            $job->tags()->attach($tags->random(3));
        });
    }
}
