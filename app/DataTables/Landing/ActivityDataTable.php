<?php

namespace App\DataTables\Landing;

use App\DataTables\DataTable;
use App\Contracts\Models\ActivityInterface;

class ActivityDataTable extends DataTable
{
    /**
     * Data Table constructor
     *
     * @return void
     */
    public function __construct(ActivityInterface $interface) {
        $this->interface = $interface;
    }
}
