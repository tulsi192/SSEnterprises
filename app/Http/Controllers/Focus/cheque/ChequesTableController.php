<?php

namespace App\Http\Controllers\Focus\cheque;


use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Focus\cheque\ChequeRepository;
use App\Http\Requests\Focus\cheque\ManageChequeRequest;

/**
 * Class BanksTableController.
 */
class ChequesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var ChequeRepository
     */
    protected $cheque;

    /**
     * contructor to initialize repository object
     * @param ChequeRepository $cheque ;
     */
    public function __construct(ChequeRepository $cheque)
    {
        $this->cheque = $cheque;
    }

    /**
     * This method return the data of the model
     * @param ManageChequeRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageChequeRequest $request)
    {
        //
        $core = $this->cheque->getForDataTable();
        return Datatables::of($core)
            ->escapeColumns(['id'])
            ->addIndexColumn()
            ->addColumn('created_at', function ($cheque) {
                return Carbon::parse($cheque->created_at)->toDateString();
            })
            ->addColumn('actions', function ($cheque) {
                return $cheque->action_buttons;
            })
            ->make(true);
    }
}
