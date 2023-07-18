<?php

declare(strict_types=1);

namespace App\Lib;

use Salaros\Vtiger\VTWSCLib\WSClient;

final class Vtiger implements VtigerInterface
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

    /**
     * @return array<string, string>|null
     */
    public function findOneById(string $module, string $id): ?array
    {
        return $this->client->entities->findOneByID($module, $id);
    }

    public function retrieveRelated(string $parentId, string $type, string $label): array
    {
        return $this->client->invokeOperation('retrieve_related', [
            'id' => $parentId,
            'relatedType' => $type,
            'relatedLabel' => $label,
        ], 'GET');
    }

    public function fileRetrieve(string $attachmentId): string
    {
        /** @var array<array{filecontents: string}> $result */
        $result = $this->client->invokeOperation('files_retrieve', [
            'id' => $attachmentId,
        ], 'GET');
        if (empty($result)) {
            return '';
        }

        return $result[0]['filecontents'];
    }

    public function getCrmId(string $id): int
    {
        return $this->client->entities->getNumericID($id);
    }
}
