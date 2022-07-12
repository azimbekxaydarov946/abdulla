<?php

namespace App\Models\UserDay;

use App\Models\Day\Day;
use App\Models\Evaluation\Evaluation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDay extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
