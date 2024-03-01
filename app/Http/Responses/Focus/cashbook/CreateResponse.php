<?php

namespace App\Http\Responses\Focus\cashbook;

use App\Models\income\Income;
use App\Models\warehouse\Warehouse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\DB;

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
        $warehouse=Warehouse::all();
        $income=Income::all();
        $userIds = DB::table('hrm_metas')->where('department_id', '!=', 2)->pluck('user_id');
        $employee = DB::table('users')->whereIn('id', $userIds)->get();
        return view('focus.cashbook.create',compact('warehouse','income','employee'));
    }
}