<?php

namespace App\Http\Responses\Focus\allocation\openallocation;

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
        return view('focus.allocations.openallocation.edit')->with([
            'allocation' => $this->allocation
        ]);
    }
}