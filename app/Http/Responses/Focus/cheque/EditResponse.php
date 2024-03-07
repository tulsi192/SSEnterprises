<?php

namespace App\Http\Responses\Focus\cheque;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\cheque\Cheque
     */
    protected $cheques;

    /**
     * @param App\Models\cheque\Cheque $cheques
     */
    public function __construct($cheques)
    {
        $this->cheques = $cheques;
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
        return view('focus.cheques.edit')->with([
            'cheques' => $this->cheques
        ]);
    }
}