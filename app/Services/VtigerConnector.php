<?php

declare(strict_types=1);

namespace App\Services;

use App\Data\ManagerData;
use Salaros\Vtiger\VTWSCLib\WSClient;

final class VtigerConnector
{
    protected WSClient $client;

    public function __construct()
    {
        /** @var string $url */
        $url = config('services.vtiger.url');
        /** @var string $login */
        $login = config('services.vtiger.username');
        /** @var string $key */
        $key = config('services.vtiger.accessKey');
        $this->client = new WSClient($url, $login, $key);
    }

    public function getAssignedUserModel(string $id): ?ManagerData
    {
        $result = $this->client->entities->findOneByID('Users', '5');

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
