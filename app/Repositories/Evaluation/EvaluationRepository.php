<?php

namespace App\Repositories\Evaluation;

use App\Models\Evaluation\Evaluation;
use App\Repositories\Repository;

class EvaluationRepository extends Repository{
    protected Evaluation $evaluation;

    public function __construct(Evaluation $evaluation)
    {
        $this->model = $evaluation;
    }
}
