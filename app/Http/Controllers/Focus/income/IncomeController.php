<?php

namespace App\Http\Controllers\Focus\income;
use App\Repositories\Focus\income\IncomeRepository;
use App\Models\income\Income;
use App\Http\Controllers\Controller;
use App\Http\Responses\Focus\income\CreateResponse;
use Illuminate\Http\Request;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\Focus\income\EditResponse;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Focus\income\CreateIncomeRequest;
use App\Http\Requests\Focus\income\ManageIncomeRequest;

class IncomeController extends Controller
{
    /**
     * variable to store the repository object
     * @var IncomeRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param IncomeRepository $repository ;
     */
    public function __construct(IncomeRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *

     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageIncomeRequest $request)
    { return new ViewResponse('focus.income.index');//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateIncomeRequest $request)
    {
        return new CreateResponse('focus.income.create');
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateIncomeRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token', 'ins']);
        $input['ins'] = auth()->user()->ins;
   
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('biller.incomes.index'), ['flash_success' => trans('alerts.backend.incomes.created')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\route\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\route\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Income $income,CreateIncomeRequest $request)
    {
        return new EditResponse($income);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\route\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(CreateIncomeRequest $request,Income $income,)
    {
        $input = $request->except(['_token', 'ins']);
        //Update the model using repository update method
        $this->repository->update($income, $input);
        //return with successfull message
        return new RedirectResponse(route('biller.incomes.index'), ['flash_success' => trans('alerts.backend.incomes.updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\route\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateIncomeRequest $request,Income $income)
    {
          //Calling the delete method on repository
          $this->repository->delete($income);
          //returning with successfull message
          return new RedirectResponse(route('biller.incomes.index'), ['flash_success' => trans('alerts.backend.incomes.deleted')]);
    }
}
