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

    /**
     * {@inheritDoc}
     */
    public function findOneById(string $module, string $id): ?array
    {
        if ($module == 'Users') {
            return self::MOCK_MANAGER;
        }

        return null;
    }
}
