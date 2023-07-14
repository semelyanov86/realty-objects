<?php

declare(strict_types=1);

namespace App\Data;

final class PropertyData extends \Spatie\LaravelData\Data
{
    public function __construct(
        public string $id,
        public string $externalid,
        public string $property_type,
        public string $project,
        public string $property_category,
        public string $project_pres,
        public string $arcitectural_style,
        public string $residence_status,
        public string $complex_description,
        public string $property_description_ext,
        public string $property_rights,
        public string $security,
        public string $price_original,
        public string $price,
        public string $currency_id,
        public string $storeys_no,
        public string $year_builded,
        public string $country,
        public string $city,
        public string $address,
    ) {
    }
}
