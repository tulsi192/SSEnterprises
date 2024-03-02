<?php

namespace App\Http\Responses\Focus\expanse;
use App\Models\expanse\Expanse;
use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\expanse\Expanse
     */
    protected $expanse;

    /**
     * @param App\Models\expanse\Expanse $expanse
     */
    public function __construct($expanse)
    {
        $this->expanse = $expanse;
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
        return view('focus.expanse.edit')->with([
            'expanse' => $this->expanse
        ]);
    }
}