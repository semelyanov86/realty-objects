<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Rating;
use Lorisleiva\Actions\Concerns\AsAction;

final class GetRatingByProperty
{
    use AsAction;

    public function handle(string $propertyId): float
    {
        return Rating::where('property_id', $propertyId)->sum('value') ?? 0;
    }
}
