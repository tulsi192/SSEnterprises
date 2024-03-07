<?php

namespace App\Http\Responses\Focus\allocation\openallocation;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\warehouse\Warehouse;
use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\allocation\openallocation\Allocation
     */
    protected $allocation;

    /**
     * @param App\Models\allocation\openallocation\Allocation $allocation
     */
    public function __construct($allocation)
    {
        $this->allocation = $allocation;
    }

    /**
     * To Response
     *
     * @param \App\Http\Requests\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {


        $warehouses = Warehouse::all();  

        $userIds = DB::table('hrm_metas')->where('department_id', '!=', 2)->pluck('user_id');
        $billsIds = DB::table('invoices')->where('status', '!=', 'paid')->pluck('customer_id');

        $billsIdsde = DB::table('invoices')->where('status', '!=', 'paid')->get();

        $saleIds = DB::table('hrm_metas')->where('department_id', 2)->pluck('user_id');

        $sellers = User::whereIn('id', $saleIds)->get();

        $employees = DB::table('users')->whereIn('id', $userIds)->get();
        $bills = DB::table('customers')->whereIn('id', $billsIds)->get();



        $bills = DB::table('customers')
   
    ->join('invoices', 'customers.id', '=', 'invoices.customer_id')
    ->where('status', '!=', 'paid')
    ->select('customers.*', 'invoices.*')
    ->get();


        $routes = DB::table('routes')->get();
        return view('focus.allocations.openallocation.edit')->with([
            'allocation' => $this->allocation,
            'warehouses'=>$warehouses,
          'billsIdsde' => $billsIdsde,
          'sellers'=>$sellers,
          'employees'=>$employees,
         'bills' =>$bills,
         'routes'=>$routes
        ]);
    }
}