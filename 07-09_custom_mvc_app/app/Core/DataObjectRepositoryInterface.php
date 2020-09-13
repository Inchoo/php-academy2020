<?php

declare(strict_types=1);

namespace App\Core;


interface DataObjectRepositoryInterface
{
    /**
     * @return DataObject[]
     */
    public function getList();
}
