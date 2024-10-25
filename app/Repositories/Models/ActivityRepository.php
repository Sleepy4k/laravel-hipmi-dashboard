<?php

namespace App\Repositories\Models;

use App\Models\Activity;
use App\Enum\ReportLogType;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\ActivityInterface;
use Illuminate\Database\Eloquent\Collection;

class ActivityRepository extends EloquentRepository implements ActivityInterface
{
    /**
     * Base respository constructor
     *
     * @param  Model  $model
     */
    public function __construct(Activity $model)
    {
        $this->model = $model;
    }

    /**
     * Get all models.
     *
     * @param  array  $columns
     * @param  array  $relations
     * @param  array  $wheres
     * @param  string  $orderBy
     * @param  bool  $latest
     * @param  array  $roles
     * @param  int  $limit
     * @return Collection
     */
    public function all(array $columns = ['*'], array $relations = [], array $wheres = [], string $orderBy = 'created_at', bool $latest = true, array $roles = [], int $limit = null): Collection
    {
        try {
            $model = $this->model->with($relations);

            if ($limit && $limit > 0) $model->take($limit);

            if (!empty($orderBy)) $model->orderBy($orderBy, $latest ? 'desc' : 'asc');

            if (!empty($wheres)) {
                $isOrCase = false;

                foreach ($wheres as $key => $value) {
                    if ($value[0] !== 'whereMode') continue;

                    $isOrCase = $value[1] === 'or';
                    unset($wheres[$key]);
                }

                if (!$isOrCase) $model->where($wheres);
                else {
                    $model->where(function ($query) use ($wheres) {
                        foreach ($wheres as $key => $where) {
                            if (count($where) === 2) {
                                $query->orWhere($where[0], $where[1]);
                            } else {
                                $query->orWhere($where[0], $where[1], $where[2]);
                            }
                        }
                    });
                }
            }

            if (!empty($roles)) $model->role($roles);

            return $model->get($columns);
        } catch (\Throwable $th) {
            $this->sendReportLog(ReportLogType::ERROR, $th->getMessage());
            return false;
        }
    }
}
