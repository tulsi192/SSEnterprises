<?php

namespace App\Repositories\Focus\Cashbook;

use DB;
use Carbon\Carbon;
use App\Models\cashbook\Cashbook;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BankRepository.
 */
class CashbookRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Cashbook::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {

        return $this->query()
            ->get(['id','name','number','enable']);
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {

     
        $input = array_map( 'strip_tags', $input);
        if (Cashbook::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.cashbooks.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Cashbook $cashbook
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Cashbook $cashbook, array $input)
    {
        $input = array_map( 'strip_tags', $input);
    	if ($cashbook->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.banks.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Cashbook $cashbook
     * @throws GeneralException
     * @return bool
     */
    public function delete(Cashbook $cashbook)
    {
        if ($cashbook->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.banks.delete_error'));
    }
}
