<?php

namespace App\Http\Controllers\Focus\cashbook;
use App\Http\Requests\Focus\cashbook\StoreCashbookRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Focus\cashbook\CreateCashbookRequest;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Focus\cashbook\ManageCashbookRequest;
use App\Http\Responses\RedirectResponse;
use App\Models\cashbook\Cashbook;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Repositories\Focus\Cashbook\CashbookRepository;
use App\Http\Responses\Focus\cashbook\CreateResponse;

class CashbookController extends Controller
{
    /**
     * variable to store the repository object
     * @var CashbookRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param CashbookRepository $repository ;
     */
    public function __construct(CashbookRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param App\Http\Requests\Focus\transaction\ManageCashbookRequest $request
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageCashbookRequest $request)
    {
        return new ViewResponse('focus.cashbook.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateCashbookRequest $request)
    {
        return new CreateResponse('focus.cashbook.create');
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCashbookRequest $request)
    {

   
    
        $input = $request->except(['_token', 'ins']);
        $input['ins'] = auth()->user()->ins;
        $notesData = $request->except('_token', 'ins','income_id','user_id','warehouse_id','amount','narration');
        $input['notescount']= json_encode($notesData);
        $input['datetime']=now();

        
        $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('biller.cashbooks.index'), ['flash_success' => trans('alerts.backend.cashbook.created')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cashbook\Cashbook  $cashbook
     * @return \Illuminate\Http\Response
     */
    public function show(Cashbook $cashbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cashbook\Cashbook  $cashbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Cashbook $cashbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cashbook\Cashbook  $cashbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cashbook $cashbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cashbook\Cashbook  $cashbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cashbook $cashbook)
    {
        //
    }
}
