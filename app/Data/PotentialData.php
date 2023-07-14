<?php

declare(strict_types=1);

namespace App\Data;

final class PotentialData extends \Spatie\LaravelData\Data
{
    public function __construct(
        public string $id,
        public string $potentialname,
        public string $opportunity_type,
        public string $sales_stage,
        public string $cf_944,
        public string $cf_946,
        public string $cf_1046,
        public string $description,
        public string $assigned_user_id,
    ) {
    }
}
