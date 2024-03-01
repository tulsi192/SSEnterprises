<?php

namespace App\Repositories\Focus\expanse;

use DB;
use Carbon\Carbon;
use App\Models\expanse\Expanse;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DepartmentRepository.
 */
class ExpanseRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Expanse::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {

        return $this->query()
            ->get(['id','Expansename','created_at']);
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
        if (Expanse::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.expanses.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Expanse $expanse
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Expanse $expanse, array $input)
    {
        $input = array_map( 'strip_tags', $input);
    	if ($expanse->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.expanses.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Expanse $expanse
     * @throws GeneralException
     * @return bool
     */
    public function delete(Expanse $expanse)
    {
        if ($expanse->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.expanses.delete_error'));
    }
}
