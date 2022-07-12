<?php

namespace App\Http\Controllers;

use App\Models\Evaluation\Evaluation;
use App\Services\Evaluation\EvaluationService;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{

    protected EvaluationService $service;

    public function __construct(EvaluationService $service)
    {
        $this->service = $service;
    }


    public function index()
    {
        $evaluations  = $this->service->get()->get();
        return view('page.evaluation',compact('evaluations'));
    }

    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


    public function store(Request $request)
    {
         $this->service->store($request->validated());
        return redirect()->route('evaluation.index');
    }
    public function edit($id)
    {

        $evaluation = Evaluation::find($id);
        return view('form.evaluation-form', ['evaluation' => $evaluation]);
    }
    public function update(Request $request, $id)
    {
         $this->service->edit($id, $request->validated());
         return redirect()->route('evaluation.index');
    }

    public function show($id)
    {

    }
    public function destroy($id)
    {
         $this->service->delete($id);
        return redirect()->route('evaluation.index');
    }
}
