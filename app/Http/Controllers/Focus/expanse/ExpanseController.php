<?php

namespace App\Http\Controllers\Focus\expanse;
use App\Repositories\Focus\expanse\ExpanseRepository;
use App\Models\expanse\Expanse;
use App\Http\Controllers\Controller;
use App\Http\Responses\Focus\expanse\CreateResponse;
use Illuminate\Http\Request;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\Focus\expanse\EditResponse;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Focus\expanse\CreateExpanseRequest;
use App\Http\Requests\Focus\expanse\ManageExpanseRequest;

class ExpanseController extends Controller
{
    /**
     * variable to store the repository object
     * @var ExpanseRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param ExpanseRepository $repository ;
     */
    public function __construct(ExpanseRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *

     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageExpanseRequest $request)
    { 
        return new ViewResponse('focus.expanse.index');//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateExpanseRequest $request)
    {
        return new CreateResponse('focus.expanse.create');
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateExpanseRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token', 'ins']);
        $input['ins'] = auth()->user()->ins;
   
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('biller.expanses.index'), ['flash_success' => trans('alerts.backend.expanses.created')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\expanse\Expanse  $expanse
     * @return \Illuminate\Http\Response
     */
    public function show(Expanse $expanse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\route\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Expanse $expanse,CreateExpanseRequest $request)
    {
        return new EditResponse($expanse);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\expanse\Expanse  $expanse
     * @return \Illuminate\Http\Response
     */
    public function update(CreateExpanseRequest $request,Expanse $expanse,)
    {
        $input = $request->except(['_token', 'ins']);
        //Update the model using repository update method
        $this->repository->update($expanse, $input);
        //return with successfull message
        return new RedirectResponse(route('biller.expanses.index'), ['flash_success' => trans('alerts.backend.expanses.updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\expanse\Expanse  $expanse
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateExpanseRequest $request,Expanse $expanse)
    {
          //Calling the delete method on repository
          $this->repository->delete($expanse);
          //returning with successfull message
          return new RedirectResponse(route('biller.expanses.index'), ['flash_success' => trans('alerts.backend.expanses.deleted')]);
    }
}
