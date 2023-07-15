<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Rating;
use Lorisleiva\Actions\Concerns\AsAction;

final class CreateRatingForProperty
{
    use AsAction;

    public function handle(string $crmid, string $ip, float $rating): Rating
    {
        return Rating::updateOrCreate([
            'property_id' => $crmid,
            'ip_address' => $ip,
        ], [
            'value' => $rating,
        ]);
    }
}
