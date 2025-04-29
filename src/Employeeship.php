<?php

namespace Wallo\FilamentCompanies;

use Illuminate\Database\Eloquent\Relations\Pivot;

abstract class Employeeship extends Pivot
{
    public function getTable()
    {
        return config('filament-tenant.pivot_table') ?? 'company_user';
    }
}
