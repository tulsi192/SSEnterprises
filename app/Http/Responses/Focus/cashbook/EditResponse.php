<?php

namespace App\Http\Responses\Focus\cashbook;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\cashbook\Cashbook
     */
    protected $cashbooks;

    /**
     * @param App\Models\cashbook\Cashbook $cashbooks
     */
    public function __construct($cashbooks)
    {
        $this->cashbooks = $cashbooks;
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
        return view('focus.cashbook.edit')->with([
            'cashbooks' => $this->cashbooks
        ]);
    }
}