<?php


namespace App\QueryFilters;

class Sort extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->orderBy('title', request($this->filterName()));
    }
}
