<?php

namespace App\Http\Responses\Focus\allocation\openallocation;
use App\Models\customer\Customer;
use App\Models\route\Route;
use App\Models\warehouse\Warehouse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class CreateResponse implements Responsable
{
    /**
     * To Response
     *
     * @param \App\Http\Requests\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        $warehouses=Warehouse::all();
        
        $userIds = DB::table('hrm_metas')
        ->where('department_id', '!=', 2)
        ->pluck('user_id');
        $billsIds=DB::table('invoices')
        ->where('status', '!=','paid')
        ->pluck('customer_id');



        $saleIds=DB::table('hrm_metas')
        ->where('department_id', 2)
        ->pluck('user_id');

        $sellers=User::whereIn('id',$saleIds)->get();
    
    $employees = User::whereIn('id', $userIds)->get();
    $bills = Customer::whereIn('id', $billsIds)->get();
    $routes=Route::all();
        return view('focus.allocations.openallocation.create',compact('warehouses','employees','bills','sellers','routes'));
    }
}