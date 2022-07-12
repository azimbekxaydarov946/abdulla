<?php

namespace App\Http\Livewire\Components;

use App\Services\Evaluation\EvaluationService;
use Livewire\Component;

class EvaluationModel extends Component
{
    protected $data;
    protected $service;
    public function boot(EvaluationService $service)
    {
        $this->service = $service;
    }

    public function store()
    {
      return dd($this->data);
    }
    public function render()
    {
        return view('livewire.components.evaluation-model');
    }
}
