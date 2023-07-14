<?php

declare(strict_types=1);

namespace App\Services;

use App\Data\ManagerData;
use App\Lib\VtigerInterface;

final class VtigerConnector
{
    public function __construct(
        protected VtigerInterface $client,
    ) {
    }

    public function getAssignedUserModel(string $id): ?ManagerData
    {
        $result = $this->client->findOneByID('Users', '5');

        return ManagerData::from([
            'first_name' => $result['first_name'],
            'last_name' => $result['last_name'],
            'email' => $result['email1'],
            'title' => $result['title'],
            'phone' => $result['phone_work'],
            'id' => $result['id'],
            'imagename' => $result['imagename'],
        ]);
    }
}
