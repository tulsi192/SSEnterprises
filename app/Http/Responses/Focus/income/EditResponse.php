<?php

namespace App\Http\Responses\Focus\income;
use App\Models\income\Income;
use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\income\Income
     */
    protected $income;

    /**
     * @param App\Models\income\Income $income
     */
    public function __construct($income)
    {
        $this->income = $income;
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
        return view('focus.income.edit')->with([
            'income' => $this->income
        ]);
    }
}