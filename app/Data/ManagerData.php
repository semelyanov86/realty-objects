<?php

declare(strict_types=1);

namespace App\Data;

final class ManagerData extends \Spatie\LaravelData\Data
{
    public function __construct(
        public string $first_name,
        public string $last_name,
        public string $email,
        public string $phone,
        public string $title,
        public string $id,
        public string $imagename,
    ) {
    }
}
