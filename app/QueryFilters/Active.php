<?php


namespace App\QueryFilters;

class Active extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->where($this->filterName(), request($this->filterName()));
    }
}
