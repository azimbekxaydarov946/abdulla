<?php

namespace Database\Seeders;

use App\Models\Evaluation\Evaluation;
use Illuminate\Database\Seeder;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evaluation::create([
            'name' => 'Excellent',
            'rating' => 5,
        ]);
        Evaluation::create([
            'name' => 'Good',
            'rating' => 4,
        ]);
        Evaluation::create([
            'name' => 'Average',
            'rating' => 3,
        ]);
        Evaluation::create([
            'name' => 'Bad',
            'rating' => 2,
        ]);
        Evaluation::create([
            'name' => 'Terrible',
            'rating' => 1,
        ]);
        
    }
}
