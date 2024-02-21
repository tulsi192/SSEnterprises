<?php

namespace App\Http\Responses\Focus\supplier;
use App\Models\route\Route;

use Illuminate\Contracts\Support\Responsable;

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
        $routes=Route::all();
        return view('focus.suppliers.create',compact('routes'));
    }
}