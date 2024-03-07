<?php

namespace App\Http\Controllers\Focus\bank;

use App\Http\Requests\Focus\general\ManageCompanyRequest;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Focus\bank\BankRepository;
use App\Http\Requests\Focus\bank\ManageBankRequest;

/**
 * Class BanksTableController.
 */
class BanksTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var BankRepository
     */
    protected $bank;

    /**
     * contructor to initialize repository object
     * @param BankRepository $bank ;
     */
    public function __construct(BankRepository $bank)
    {
        $this->bank = $bank;
    }

    /**
     * This method return the data of the model
     * @param ManageBankRequest $request
     *
     * @return mixed  
     */
    public function __invoke(ManageCompanyRequest $request)
    {
        //
        $core = $this->bank->getForDataTable();
        return Datatables::of($core)
            ->escapeColumns(['id'])
            ->addIndexColumn()
            ->addColumn('created_at', function ($bank) {
                return Carbon::parse($bank->created_at)->toDateString();
            })
            ->addColumn('actions', function ($bank) {
                return $bank->action_buttons;
            })
            ->make(true);
    }
}
