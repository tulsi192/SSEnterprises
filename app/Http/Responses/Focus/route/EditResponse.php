<?php

namespace App\Http\Responses\Focus\route;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\route\Route
     */
    protected $route;

    /**
     * @param App\Models\route\Route $route
     */
    public function __construct($route)
    {
        $this->route = $route;
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
        return view('focus.route.edit')->with([
            'route' => $this->route
        ]);
    }
}