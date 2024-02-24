<?php

namespace App\Repositories\Focus\income;

use DB;
use Carbon\Carbon;
use App\Models\income\Income;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DepartmentRepository.
 */
class IncomeRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Income::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {

        return $this->query()
            ->get(['id','Incomename','created_at']);
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
        if (Income::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.incomes.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Income $income
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Income $income, array $input)
    {
        $input = array_map( 'strip_tags', $input);
    	if ($income->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.incomes.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Income $income
     * @throws GeneralException
     * @return bool
     */
    public function delete(Income $income)
    {
        if ($income->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.incomes.delete_error'));
    }
}
