<?php

declare(strict_types=1);

namespace App\Data;

final class ManagerData extends \Spatie\LaravelData\Data
{
    /**
     * @param  array{id: string, orgname: string, path: string, name: string, url:string}|null  $image_details
     */
    public function __construct(
        public string $first_name,
        public string $last_name,
        public string $email,
        public string $phone,
        public string $title,
        public string $id,
        public string $imagename,
        public ?array $image_details
    ) {
    }
}
