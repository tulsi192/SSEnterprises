<?php

namespace App\Http\Controllers\Focus\route;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Focus\route\RouteRepository;
use App\Http\Requests\Focus\route\ManageRouteRequest;

/**
 * Class DepartmentsTableController.
 */
class RoutesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var RouteRepository
     */
    protected $route;

    /**
     * contructor to initialize repository object
     * @param RouteRepository  $route ;
     */
    public function __construct(RouteRepository $route)
    {
        $this->route = $route;
    }

    /**
     * This method return the data of the model
     * @param ManageRouteRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageRouteRequest $request)
    {
        //
        $core = $this->route->getForDataTable();
        return Datatables::of($core)
            ->escapeColumns(['id'])
            ->addIndexColumn()
            ->addColumn('Routename', function ($route) {
                //  return $department->name;
                return '<a href="' . route('biller.routes.index') . '?rel_type=2&rel_id=' . $route->id . '">' . $route->Routename . '</a>';
            })
            ->addColumn('Routecode', function ($route) {
                return $route->Routecode;
            })
            ->addColumn('supplier_name', function ($route) {
                $supplierNames = $route->suppliers->pluck('name')->implode(', ');
                return $supplierNames; // Assuming the 'Supplier' model has a 'name' attribute
            })
            ->addColumn('created_at', function ($route) {
                return Carbon::parse($route->created_at)->toDateString();
            })
            
            
            ->addColumn('actions', function ($route) {
                return '<a href="' . route('biller.routes.index') . '?rel_type=2&rel_id=' . $route->id . '" class="btn btn-purple round" data-toggle="tooltip" data-placement="top" title="List"><i class="fa fa-list"></i></a> ' . $route->action_buttons;
            })
            ->make(true);
    }
}
