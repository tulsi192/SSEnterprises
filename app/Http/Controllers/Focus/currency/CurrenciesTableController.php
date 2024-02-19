<?php

namespace App\Http\Controllers\Focus\currency;

use App\Http\Requests\Focus\general\ManageCompanyRequest;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Focus\currency\CurrencyRepository;
use App\Http\Requests\Focus\currency\ManageCurrencyRequest;

/**
 * Class CurrenciesTableController.
 */
class CurrenciesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var CurrencyRepository
     */
    protected $currency;

    /**
     * contructor to initialize repository object
     * @param CurrencyRepository $currency ;
     */
    public function __construct(CurrencyRepository $currency)
    {
        $this->currency = $currency;
    }

    /**
     * This method return the data of the model
     * @param ManageCurrencyRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageCompanyRequest $request)
    {
        //
        $core = $this->currency->getForDataTable();
        return Datatables::of($core)
            ->escapeColumns(['id'])
            ->addIndexColumn()
            ->addColumn('created_at', function ($currency) {
                return dateFormat($currency->created_at);
            })
            ->addColumn('actions', function ($currency) {
                return $currency->action_buttons;
            })
            ->make(true);
    }
}
