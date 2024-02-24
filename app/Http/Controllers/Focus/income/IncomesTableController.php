<?php

namespace App\Http\Controllers\Focus\income;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Focus\income\IncomeRepository;
use App\Http\Requests\Focus\income\ManageIncomeRequest;

/**
 * Class DepartmentsTableController.
 */
class IncomesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var IncomeRepository
     */
    protected $income;

    /**
     * contructor to initialize repository object
     * @param IncomeRepository  $income ;
     */
    public function __construct(IncomeRepository $income)
    {
        $this->income = $income;
    }

    /**
     * This method return the data of the model
     * @param ManageIncomeRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageIncomeRequest $request)
    {
        //
        $core = $this->income->getForDataTable();
        return Datatables::of($core)
            ->escapeColumns(['id'])
            ->addIndexColumn()
            ->addColumn('Incomename', function ($income) {
                //  return $department->name;
                return '<a href="' . route('biller.incomes.index') . '?rel_type=2&rel_id=' . $income->id . '">' . $income->Incomename . '</a>';
            })
          
            
            ->addColumn('created_at', function ($income) {
                return Carbon::parse($income->created_at)->toDateString();
            })
            
            
            ->addColumn('actions', function ($income) {
                return '<a href="' . route('biller.incomes.index') . '?rel_type=2&rel_id=' . $income->id . '" class="btn btn-purple round" data-toggle="tooltip" data-placement="top" title="List"><i class="fa fa-list"></i></a> ' . $income->action_buttons;
            })
            ->make(true);
    }
}
