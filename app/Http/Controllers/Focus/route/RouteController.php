<?php

namespace App\Http\Controllers\Focus\route;
use App\Repositories\Focus\route\RouteRepository;
use App\Models\route\Route;
use App\Http\Controllers\Controller;
use App\Http\Responses\Focus\route\CreateResponse;
use Illuminate\Http\Request;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\Focus\route\EditResponse;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Focus\route\CreateRouteRequest;
use App\Http\Requests\Focus\route\ManageRouteRequest;

class RouteController extends Controller
{
    /**
     * variable to store the repository object
     * @var RouteRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param RouteRepository $repository ;
     */
    public function __construct(RouteRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *

     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageRouteRequest $request)
    { return new ViewResponse('focus.route.index');//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateRouteRequest $request)
    {
        return new CreateResponse('focus.route.create');
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRouteRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token', 'ins']);
        $input['ins'] = auth()->user()->ins;
   
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('biller.routes.index'), ['flash_success' => trans('alerts.backend.routes.created')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\route\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\route\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route,CreateRouteRequest $request)
    {
        return new EditResponse($route);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\route\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRouteRequest $request,Route $route,)
    {
        $input = $request->except(['_token', 'ins']);
        //Update the model using repository update method
        $this->repository->update($route, $input);
        //return with successfull message
        return new RedirectResponse(route('biller.routes.index'), ['flash_success' => trans('alerts.backend.routes.updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\route\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateRouteRequest $request,Route $route)
    {
          //Calling the delete method on repository
          $this->repository->delete($route);
          //returning with successfull message
          return new RedirectResponse(route('biller.routes.index'), ['flash_success' => trans('alerts.backend.routes.deleted')]);
    }
}
