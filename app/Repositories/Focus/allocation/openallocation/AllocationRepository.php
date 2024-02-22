<?php

namespace App\Repositories\Focus\allocation\openallocation;

use DB;
use Carbon\Carbon;
use App\Models\allocation\openallocation\Allocation;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DepartmentRepository.
 */
class AllocationRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Allocation::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {

        return $this->query()
            ->get(['id','Routename','Routecode','created_at']);
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
        if (Allocation::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.departments.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Route $route
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Allocation $allocation, array $input)
    {
        $input = array_map( 'strip_tags', $input);
    	if ($allocation->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.departments.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Allocation $allocation
     * @throws GeneralException
     * @return bool
     */
    public function delete(Allocation $allocation)
    {
        if ($allocation->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.departments.delete_error'));
    }
}
