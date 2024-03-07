<?php

namespace App\Http\Responses\Focus\cheque;

use App\Models\warehouse\Warehouse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Config;

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
        $bankNames = Config::get('banks');
        
        return view('focus.cheques.create',compact('warehouses','bankNames'));
    }
}