<?php

namespace App\Models\Day;

use App\Models\evaluation\evaluation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
}
