<?php

namespace App\Http\Controllers\Focus\allocation;
use App\Repositories\Focus\allocation\openallocation\AllocationRepository;
use App\Models\allocation\openallocation\Allocation;
use Illuminate\Support\Facades\DB;
use App\Models\customer\Customer;
use App\Http\Controllers\Controller;
use App\Http\Responses\Focus\allocation\openallocation\CreateResponse;
use Illuminate\Http\Request;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\Focus\allocation\openallocation\EditResponse;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Focus\allocation\openallocation\CreateAllocationRequest;
use App\Http\Requests\Focus\allocation\openallocation\ManageAllocationRequest;

class AllocationController extends Controller
{
    /**
     * variable to store the repository object
     * @var AllocationRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param AllocationRepository $repository ;
     */
    public function __construct(AllocationRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *

     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageAllocationRequest $request)
    { return new ViewResponse('focus.allocations.openallocation.index');//
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateAllocationRequest $request)
    {
       

        return new CreateResponse('focus.allocations.openallocation.create');
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAllocationRequest $request)
    {
        //Input received from the request
        
        $input = $request->except(['_token', 'ins']);
        $input['ins'] = auth()->user()->ins;
        $selectedRoutes = $request->input('selectedRoutes');
        
    

        // Display the selected routes data
     


        // Loop through each selected route ID
        // foreach ($selectedRoutes as $routeId) {
        //     // Process each route ID as needed
        //     // For example, you can save it to the database
        //    dd($routeId);
        // }

   
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('biller.allocations.index'), ['flash_success' => trans('alerts.backend.allocation.created')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\allocation\openallocation\Allocation  $allocation
     * @return \Illuminate\Http\Response
     */
    public function show(Allocation $allocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\allocation\openallocation\Allocation  $allocation
     * @return \Illuminate\Http\Response
     */
    public function edit(Allocation $allocation,CreateAllocationRequest $request)
    {
        return new EditResponse($allocation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\allocation\openallocation\Allocation  $allocation
     * @return \Illuminate\Http\Response
     */
    public function update(CreateAllocationRequest $request,Allocation $allocation,)
    {
        $input = $request->except(['_token', 'ins']);
        //Update the model using repository update method
        $this->repository->update($allocation, $input);
        //return with successfull message
        return new RedirectResponse(route('biller.allocations.index'), ['flash_success' => trans('alerts.backend.routes.updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
   * @param  \App\Models\allocation\openallocation\Allocation  $allocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateAllocationRequest $request,Allocation $allocation)
    {
          //Calling the delete method on repository
          $this->repository->delete($allocation);
          //returning with successfull message
          return new RedirectResponse(route('biller.allocations.index'), ['flash_success' => trans('alerts.backend.routes.deleted')]);
    }

    public function billshow($id){
        
        $billIds= DB::table('invoices')
        ->where('customer_id', $id)
        ->where('status', '!=', 'paid')
        ->join('customers', 'invoices.customer_id', '=', 'customers.id')
        ->select('customers.name','invoices.*')
        ->get();
      
  
        return response()->json($billIds);

    }
}