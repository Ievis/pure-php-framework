<?php

namespace App\Controller;

use App\Components\Db\QueryBuilder;

class AbstractController
{
    public QueryBuilder $builder;

    public function __construct(QueryBuilder $builder)
    {
        $this->builder = $builder;
    }
}