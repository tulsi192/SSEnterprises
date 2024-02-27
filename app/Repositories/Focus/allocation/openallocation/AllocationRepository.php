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
        $allocationNumber = $this->generateUniqueAllocationNumber();

        // Assign the allocation number to the input array
        $input['allocation_number'] = $allocationNumber;
        
        if (Allocation::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.departments.create_error'));
    }
    private function generateUniqueAllocationNumber()
    {
        // Generate a random 4-digit number
        $allocationNumber = mt_rand(1000, 9999);
    
        // Check if the number already exists in the database
        $existingAllocation = Allocation::where('allocation_number', $allocationNumber)->first();
    
        // If the number already exists, regenerate a new number until it's unique
        while ($existingAllocation) {
            $allocationNumber = mt_rand(1000, 9999);
            $existingAllocation = Allocation::where('allocation_number', $allocationNumber)->first();
        }
    
        return $allocationNumber;
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
