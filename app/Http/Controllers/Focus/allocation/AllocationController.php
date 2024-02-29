<?php

namespace App\Http\Controllers\Focus\allocation;
use App\Models\department\Department;
use App\Models\hrm\HrmMeta;
use App\Models\invoice\Invoice;
use App\Repositories\Focus\allocation\openallocation\AllocationRepository;
use App\Models\allocation\openallocation\Allocation;
use Illuminate\Support\Facades\DB;
use App\Models\route\Route;

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
    {
        // $allocation=Allocation::all();
        $allocation = Allocation::with('warehouse')->get()->toArray();

        $routeIds = Allocation::pluck('route_id')->toArray();
        $userIds = Allocation::pluck('user_id')->toArray();

        $routeNames = [];
        $userNames = [];

        foreach ($routeIds as $ids) {
            $idsArray = explode(',', $ids);
            $names = DB::table('routes')->whereIn('id', $idsArray)->pluck('Routename')->implode(', ');
            $routeNames[] = $names;
        }

        $routeNames;

        foreach ($userIds as $ids) {
            $idsArray = explode(',', $ids);
            $names = DB::table('users')->whereIn('id', $idsArray)->pluck('first_name')->implode(', ');
            $userNames[] = $names;
        }

        $userNames;

        $userdepartment = Department::with('users')->get()->toArray();

        // Pass the concatenated route names to the Blade file

        return new ViewResponse('focus.allocations.openallocation.index', compact('allocation', 'routeNames', 'userNames', 'userdepartment')); //
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
        $sales = $request->sales_id;
        // $input = $request->except(['_token', 'ins']);
        $input['ins'] = auth()->user()->ins;
        $input['warehouse_id'] = $request->input('warehouse_id');
        $input['allocationtype'] = $request->input('allocationtype');

        $selectedValues = json_decode($request->input('selectedValues'), true);

        $selectedValues1 = json_decode($request->input('selectedValues1'), true);
        $keys = array_keys($selectedValues1);
        $employeeIdsString = implode(',', $keys);

        $mergedString = $employeeIdsString . ',' . $sales;

        // true to decode as associative array

        // Filter out the numeric keys
        $numericKeys = array_filter(array_keys($selectedValues), 'is_numeric');

        $routeIdsString = implode(',', $numericKeys);
        $customer_ids = explode(',', $request['bill_ids']);


        $customerIds = Invoice::whereIn('customer_id', $customer_ids)->where('status', '!=', 'paid')->pluck('id')->toArray();
        $invoiceids = implode(',',$customer_ids);
      

        // Now $routeIdsArray should contain string values
        $input['invoice_id'] = $request['bill_ids'];
        $input['route_id'] = $routeIdsString;
        $input['user_id'] = $mergedString;

        $allocationNumber = $this->generateUniqueAllocationNumber();
        $input['allocation_number'] = $allocationNumber;
        $input['invoice_id'] = $invoiceids;
        $allocation = new Allocation();
        $allocation->create($input); // $selectedRoutes = $request->input('selectedRoutes');

        // Display the selected routes data

        // Loop through each selected route ID
        // foreach ($selectedRoutes as $routeId) {
        //     // Process each route ID as needed
        //     // For example, you can save it to the database
        //    dd($routeId);
        // }

        //Create the model using repository create method

        // $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('biller.allocations.index'), ['flash_success' => trans('alerts.backend.allocation.created')]);
    }
    private function generateUniqueAllocationNumber()
    {
        // Generate a random 4-digit number
        $allocationNumber = mt_rand(1000, 9999);

        // Check if the number already exists in the database
        $existingAllocation = Allocation::where('allocation_number', $allocationNumber)->first();

        // If the number already exists, regenerate a new number until it's unique
        while ($existingAllocation) {
            $allocationNumber = mt_rand(1000, 9999);
            $existingAllocation = Allocation::where('allocation_number', $allocationNumber)->first();
        }

        return $allocationNumber;
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
    public function edit(Allocation $allocation, CreateAllocationRequest $request)
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
    public function update(CreateAllocationRequest $request, Allocation $allocation)
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
    public function destroy(CreateAllocationRequest $request, Allocation $allocation)
    {
        //Calling the delete method on repository
        $this->repository->delete($allocation);
        //returning with successfull message
        return new RedirectResponse(route('biller.allocations.index'), ['flash_success' => trans('alerts.backend.routes.deleted')]);
    }

    public function billshow($id)
    {
        $billIds = DB::table('invoices')->where('customer_id', $id)->where('status', '!=', 'paid')->join('customers', 'invoices.customer_id', '=', 'customers.id')->select('customers.name', 'invoices.*')->get();

        return response()->json($billIds);
    }
}
