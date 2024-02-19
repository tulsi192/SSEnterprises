<?php

namespace App\Http\Controllers\Focus\account;

use App\Models\Company\ConfigMeta;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Focus\account\AccountRepository;
use App\Http\Requests\Focus\account\ManageAccountRequest;

/**
 * Class AccountsTableController.
 */
class AccountsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var AccountRepository
     */
    protected $account;

    /**
     * contructor to initialize repository object
     * @param AccountRepository $account ;
     */
    public function __construct(AccountRepository $account)
    {
        $this->account = $account;
    }

    /**
     * This method return the data of the model
     * @param ManageAccountRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageAccountRequest $request)
    {
        //
        $flag=dual_entry();
        $core = $this->account->getForDataTable();
        return Datatables::of($core)
            ->escapeColumns(['id', 'number', 'holder'])
            ->addIndexColumn()
            ->addColumn('balance', function ($account) use ($flag) {
                if ($flag) {
                    return amountFormat($account->balance);
                }
                return amountFormat($account->balance-$account->debit);
            })
            ->addColumn('debit', function ($account) {
                return amountFormat($account->debit);
            })
            ->addColumn('account_type', function ($account) {
                return trans('accounts.' . $account->account_type);
            })
            ->addColumn('created_at', function ($account) {
                return dateFormat($account->created_at);
            })
            ->addColumn('actions', function ($account) {
                return $account->action_buttons;
            })
            ->make(true);
    }
}
