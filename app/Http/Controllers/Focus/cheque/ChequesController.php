<?php

namespace App\Http\Controllers\Focus\cheque;

use App\Http\Requests\Focus\cheque\ManageChequeRequest;

use Illuminate\Http\Request;
use App\Models\cheque\cheque;
use App\Http\Controllers\Controller;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Http\Responses\Focus\cheque\CreateResponse;
use App\Http\Responses\Focus\cheque\EditResponse;
use App\Repositories\Focus\cheque\ChequeRepository;


/**
 * BanksController
 */
class ChequesController extends Controller
{
    /**
     * variable to store the repository object
     * @var ChequeRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param ChequeRepository $cheque ;
     */
    public function __construct(ChequeRepository $cheque)
    {
        $this->cheque = $cheque;
    }

    /**
     * Display a listing of the resource.
     *
     * @param App\Http\Requests\Focus\cheque\ManageChequeRequest $request
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageChequeRequest $request)
    {
        return new ViewResponse('focus.cheques.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param CreateChequeRequestNamespace $request
     * @return \App\Http\Responses\Focus\cheque\CreateResponse
     */
    public function create(ManageChequeRequest $request)
    {
        return new CreateResponse('focus.cheques.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreChequeRequestNamespace $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(ManageChequeRequest $request)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'bank' => 'required|string',
        //     'number' => 'required'
        // ]);
        //Input received from the request
        $input = $request->except(['_token', 'ins']);
        $input['ins'] = auth()->user()->ins;
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('biller.cheques.index'), ['flash_success' => trans('alerts.backend.cheques.created')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param App\Models\cheque\Cheque $cheque
     * @param EditChequeRequestNamespace $request
     * @return \App\Http\Responses\Focus\bank\EditResponse
     */
    public function edit(Cheque $cheque, ManageChequeRequest $request)
    {
        return new EditResponse($cheque);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateChequeRequestNamespace $request
     * @param App\Models\cheque\Cheque $cheque
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(ManageChequeRequest $request, Cheque $cheque)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'bank' => 'required|string',
        //     'number' => 'required'
        // ]);
        //Input received from the request
        $input = $request->except(['_token', 'ins']);
        //Update the model using repository update method
        $this->repository->update($cheque, $input);
        //return with successfull message
        return new RedirectResponse(route('biller.cheques.index'), ['flash_success' => trans('alerts.backend.cheques.updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DeleteChequeRequestNamespace $request
     * @param App\Models\cheque\Cheque $cheque
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Cheque $cheque, ManageChequeRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($cheque);
        //returning with successfull message
        return new RedirectResponse(route('biller.cheques.index'), ['flash_success' => trans('alerts.backend.cheques.deleted')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DeleteChequeRequestNamespace $request
     * @param App\Models\cheque\Cheque $cheque
     * @return \App\Http\Responses\RedirectResponse
     */
    public function show(Cheque $cheque, ManageChequeRequest $request)
    {

        //returning with successfull message
        return new ViewResponse('focus.cheques.view', compact('cheque'));
    }

}
