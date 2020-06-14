<?php

use App\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::create([
            'name' => 'banner',
            'content' => json_encode([
                'title' => 'EVERY STUDENT YEARNS TO LEARN',
                'subtitle' => 'Making Your Students World Better',
                'desc' => "Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you'll male grass yielding yielding man",
            ])
        ]);

        Content::create([
            'name' => 'courses',
            'content' => json_encode([
                'title' => 'POPULAR COURSES',
                'subtitle' => 'Special Courses',
            ])
        ]);

        Content::create([
            'name' => 'testmonials',
            'content' => json_encode([
                'title' => 'TESIMONIALS',
                'subtitle' => 'Happy Students',
            ])
        ]);

        Content::create([
            'name' => 'footer',
            'content' => json_encode([
                'title' => 'Newsletter',
                'subtitle' => 'Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.',
                'desc' => "But when shot real her. Chamber her one visite removal six sending himself boys scot exquisite existend an But when shot real her hamber her",
            ])
        ]);

        Content::create([
            'name' => 'main feature',
            'content' => json_encode([
                'title' => 'Awesome Feature',
                'desc' => "Set have great you male grass yielding an yielding first their youre have called the abundantly fruit were man",
            ])
        ]);
        Content::create([
            'name' => 'feature1',
            'content' => json_encode([
                'title' => 'Better Future',
                'desc' => "Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male",
            ])
        ]);
        Content::create([
            'name' => 'feature2',
            'content' => json_encode([
                'title' => 'Qualified Trainers',
                'desc' => "Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male",
            ])
        ]);
        Content::create([
            'name' => 'feature3',
            'content' => json_encode([
                'title' => 'Job Oppurtunity',
                'desc' => "Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male",
            ])
        ]);
      
    }
}
