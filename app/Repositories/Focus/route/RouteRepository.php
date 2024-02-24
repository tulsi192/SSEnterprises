<?php

namespace App\Repositories\Focus\route;

use DB;
use Carbon\Carbon;
use App\Models\route\Route;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DepartmentRepository.
 */
class RouteRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Route::class;

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
        if (Route::create($input)) {
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
    public function update(Route $route, array $input)
    {
        $input = array_map( 'strip_tags', $input);
    	if ($route->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.departments.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Route $route
     * @throws GeneralException
     * @return bool
     */
    public function delete(Route $route)
    {
        if ($route->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.departments.delete_error'));
    }
}
