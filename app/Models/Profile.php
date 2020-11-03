<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * Retrieve all data of repository, paginated
     *
     * @param int      $perPage
     * @param array    $columns
     * @param string   $pageName
     * @param int|null $page
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginated($perPage = null, $columns = ['*'], $pageName = 'page', $page = null)
    {
        // Get the default per page when not set
        $perPage = $perPage ?: config('repositories.per_page', 10);

        // Get the per page max
        $perPageMax = config('repositories.max_per_page', 100);

        // Ensure the user can never make the per
        // page limit higher than the defined max.
        if ($perPage > $perPageMax) {
            $perPage = $perPageMax;
        }

        $this->newQuery();

        return $this->query->paginate($perPage, $columns, $pageName, $page);
    }
}
