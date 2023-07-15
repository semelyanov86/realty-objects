<?php

declare(strict_types=1);

namespace App\Lib;

final class MockVtiger implements VtigerInterface
{
    const MOCK_MANAGER = [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email1' => 'john@mail.ru',
        'phone_work' => '123456789',
        'title' => 'Manager',
        'id' => '1x5',
        'imagename' => 'manager.jpg',
    ];

    const MOCK_POTENTIAL = [
        'id' => '5x342',
        'potentialname' => 'Super new propertied',
        'opportunity_type' => 'New Business',
        'sales_stage' => 'Prospecting',
        'cf_944' => '1000000',
        'assigned_user_id' => '1x5',
        'cf_946' => '1000000',
        'cf_1046' => '1000000',
        'description' => 'Some interesting description',
    ];

    /**
     * {@inheritDoc}
     */
    public function findOneById(string $module, string $id): ?array
    {
        if ($module == 'Users') {
            return self::MOCK_MANAGER;
        }

        if ($module == 'Potentials') {
            return self::MOCK_POTENTIAL;
        }

        return null;
    }

    public function retrieveRelated(string $parentId, string $type, string $label): array
    {
        return [];
    }

    public function fileRetrieve(string $attachmentId): string
    {
        return 'SOME_CONTENT_BASE64';
    }
}
