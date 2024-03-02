<?php

namespace App\Http\Controllers\Focus\expanse;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Focus\expanse\ExpanseRepository;
use App\Http\Requests\Focus\expanse\ManageExpanseRequest;

/**
 * Class DepartmentsTableController.
 */
class ExpansesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var ExpanseRepository
     */
    protected $expanse;

    /**
     * contructor to initialize repository object
     * @param ExpanseRepository  $expanse ;
     */
    public function __construct(ExpanseRepository $expanse)
    {
        $this->expanse = $expanse;
    }

    /**
     * This method return the data of the model
     * @param ManageExpanseRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageExpanseRequest $request)
    {
        //
        $core = $this->expanse->getForDataTable();
        return Datatables::of($core)
            ->escapeColumns(['id'])
            ->addIndexColumn()
            ->addColumn('Expansename', function ($expanse) {
                //  return $department->name;
                return '<a href="' . route('biller.expanses.index') . '?rel_type=2&rel_id=' . $expanse->id . '">' . $expanse->Expansename . '</a>';
            })
          
            
            ->addColumn('created_at', function ($expanse) {
                return Carbon::parse($expanse->created_at)->toDateString();
            })
            
            
            ->addColumn('actions', function ($expanse) {
                return '<a href="' . route('biller.expanses.index') . '?rel_type=2&rel_id=' . $expanse->id . '" class="btn btn-purple round" data-toggle="tooltip" data-placement="top" title="List"><i class="fa fa-list"></i></a> ' . $expanse->action_buttons;
            })
            ->make(true);
    }
}
