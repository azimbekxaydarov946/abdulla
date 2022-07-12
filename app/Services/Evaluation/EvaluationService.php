<?php

namespace App\Services\Evaluation;


use App\Repositories\Evaluation\EvaluationRepository;
use App\Services\Service;

class EvaluationService extends Service
{

    public function __construct(EvaluationRepository $repository)
    {
        $this->repository = $repository;
    }
}
