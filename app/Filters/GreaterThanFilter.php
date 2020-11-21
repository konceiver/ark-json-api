<?php

declare(strict_types=1);

namespace App\Filters;

use Spatie\QueryBuilder\Filters\Filter;

final class GreaterThanFilter implements Filter
{
    use Concerns\InvokesWithOperator;

    protected string $operator = '>';
}
