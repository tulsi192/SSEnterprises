<?php

namespace App\Repositories\Focus\cheque;

use DB;
use Carbon\Carbon;
use App\Models\cheque\Cheque;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BankRepository.
 */
class ChequeRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Cheque::class;

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
        if (Cheque::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.banks.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Cheque $cheque
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Cheque $cheque, array $input)
    {
        $input = array_map( 'strip_tags', $input);
    	if ($cheque->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.cheques.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Cheque $cheque
     * @throws GeneralException
     * @return bool
     */
    public function delete(Cheque $cheque)
    {
        if ($cheque->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.cheques.delete_error'));
    }
}
