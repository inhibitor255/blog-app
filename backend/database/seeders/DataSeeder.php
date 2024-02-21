<?php

namespace Database\Seeders;

use App\Models\Programming;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'နည်းလမ်းများ', 'Tutorial', 'Tips', 'Website', 'Frontend', 'Backend'
        ];
        $programmings = [
            'PHP', 'Laravel', 'Vue', 'React', 'Node', 'Python', 'Java', 'C#'
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag,
                'slug' => Str::slug($tag)
            ]);
        }
        foreach ($programmings as $p) {
            Programming::create([
                'name' => $p,
                'slug' => Str::slug($p)
            ]);
        }
    }
}
