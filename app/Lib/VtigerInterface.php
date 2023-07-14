<?php

declare(strict_types=1);

namespace App\Lib;

interface VtigerInterface
{
    /**
     * @return array<string, string>|null
     */
    public function findOneById(string $module, string $id): ?array;

    /**
     * @return array<array<string, string>>
     */
    public function retrieveRelated(string $parentId, string $type, string $label): array;
}
