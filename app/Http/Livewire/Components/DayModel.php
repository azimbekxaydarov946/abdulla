<?php

namespace App\Http\Livewire\Components;

use App\Models\Evaluation\Evaluation;
use Livewire\Component;

class DayModel extends Component
{
    public function render()
    {
        $evaluations = Evaluation::get();
        return view('livewire.components.day-model', compact('evaluations'));
    }
}
