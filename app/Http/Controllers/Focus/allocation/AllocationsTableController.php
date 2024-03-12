<?php

namespace App\Http\Controllers\Focus\allocation;

use App\Http\Requests\Focus\allocation\openallocation\ManageAllocationRequest;
use App\Models\department\Department;
use App\Models\invoice\Invoice;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Repositories\Focus\allocation\openallocation\AllocationRepository;

/**
 * Class BanksTableController.
 */
class AllocationsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var AllocationRepository
     */
    protected $allocation;

    /**
     * contructor to initialize repository object
     * @param AllocationRepository  $allocation ;
     */
    public function __construct(AllocationRepository $allocation)
    {
        $this->allocation = $allocation;
    }

    /**
     * This method return the data of the model
     * @param ManageAllocationRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageAllocationRequest $request)
    {
        //
        $core = $this->allocation->getForDataTable();
        return Datatables::of($core)
            ->escapeColumns(['id'])
            ->addIndexColumn()
            ->addColumn('allocation_number', function ($allocation) {
                return $allocation->allocation_number;
            })
            ->addColumn('warehouse', function ($allocation) {
                if ($allocation->warehouse) {
                    return $allocation->warehouse->title;
                } else {
                    return 'No Warehouse'; // Or any other default value or error handling logic
                }
            })
            ->addColumn('route_name', function ($allocation) {
                $idsArray = explode(',', $allocation->route_id);
                $route_name = DB::table('routes')->whereIn('id', $idsArray)->pluck('Routename')->implode(', ');
                return $route_name;
            })
            ->addColumn('employee_name', function ($allocation) {
                $idsArray = explode(',', $allocation->user_id);

                // Retrieve the department with ID 1 and users whose IDs exist in $idsArray
                $department = Department::where('departments.id', 1)
                    ->whereHas('users', function ($query) use ($idsArray) {
                        $query->whereIn('users.id', $idsArray);
                    })
                    ->first();

                if ($department) {
                    // Filter the users to only those whose IDs exist in $idsArray
                    $filteredUsers = $department->users->whereIn('id', $idsArray);

                    // Retrieve usernames of filtered users
                    $usernames = $filteredUsers->pluck('first_name')->toArray();

                    // Return the usernames
                    return $usernames;
                } else {
                    // Department with ID 1 does not contain users with the specified user IDs
                    // Handle this scenario accordingly
                    return '-'; // or any default value you want to return
                }
            })
            ->addColumn('last_saler_name', function ($allocation) {
                $idsArray = explode(',', $allocation->user_id);

                $department = Department::where('departments.id', 2)
                    ->whereHas('users', function ($query) use ($idsArray) {
                        $query->whereIn('users.id', $idsArray);
                    })
                    ->first();

                if ($department) {
                    // Filter the users to only those whose IDs exist in $idsArray
                    $filteredUsers = $department->users->whereIn('id', $idsArray);

                    // Retrieve usernames of filtered users
                    $usernames = $filteredUsers->pluck('first_name')->toArray();

                    // Return the usernames
                    return $usernames;
                } else {
                    // Department with ID 1 does not contain users with the specified user IDs
                    // Handle this scenario accordingly
                    return '-'; // or any default value you want to return
                }
            })
            ->addColumn('invoice_id', function ($allocation) {
                $idsArray = explode(',', $allocation->invoice_id);
                if (empty($allocation->invoice_id) || count(array_filter($idsArray, 'strlen')) === 0) {
                    return 0;
                }

                $count = count($idsArray);
                return $count;
            })
            ->addColumn('amount', function ($allocation) {
                $idsArray = explode(',', $allocation->invoice_id);
                if (empty($allocation->invoice_id) || count(array_filter($idsArray, 'strlen')) === 0) {
                    return 0;
                }
                $total = Invoice::whereIn('id', $idsArray)->sum('total');
                $pamount = Invoice::whereIn('id', $idsArray)->sum('pamnt');
                $amount = round($total - $pamount);

                return $amount;
            })

            ->addColumn('actions', function ($allocation) {
                return '<a href="' . route('biller.allocations.fieldstaff', ['id' => $allocation->id]) . '" class="btn btn-purple round" data-toggle="tooltip" data-placement="top" title="List"><i class="">Fieldstaff</i></a> ' . $allocation->action_buttons;


            })

            ->make(true);
    }
}
