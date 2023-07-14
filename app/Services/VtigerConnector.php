<?php

declare(strict_types=1);

namespace App\Services;

use App\Data\ManagerData;
use App\Data\PotentialData;
use App\Data\PropertyData;
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

        if ($result === null) {
            return null;
        }

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

    public function getPotentialById(int $id): ?PotentialData
    {
        $result = $this->client->findOneById('Potentials', (string) $id);

        if ($result === null) {
            return null;
        }

        return PotentialData::from([
            'id' => $result['id'],
            'potentialname' => $result['potentialname'],
            'opportunity_type' => $result['opportunity_type'],
            'sales_stage' => $result['sales_stage'],
            'cf_944' => $result['cf_944'],
            'assigned_user_id' => $result['assigned_user_id'],
            'cf_946' => $result['cf_946'],
            'cf_1046' => $result['cf_1046'],
            'description' => $result['description'],
        ]);
    }

    /**
     * @return PropertyData[]
     */
    public function getRelatedProperties(string $id): array
    {
        $originalProperties = $this->client->retrieveRelated($id, 'VDProperty', 'VDProperty');

        $properties = [];
        foreach ($originalProperties as $originalProperty) {
            $properties[] = PropertyData::from([
                'id' => $originalProperty['id'],
                'externalid' => $originalProperty['externalid'],
                'property_type' => $originalProperty['property_type'],
                'project' => '',
                'property_category' => $originalProperty['property_category'],
                'project_pres' => $originalProperty['project_pres'],
                'arcitectural_style' => $originalProperty['arcitectural_style'],
                'residence_status' => $originalProperty['residence_status'],
                'complex_description' => $originalProperty['complex_description'],
                'property_description_ext' => $originalProperty['property_description_ext'],
                'property_rights' => $originalProperty['property_rights'],
                'security' => $originalProperty['security'],
                'price_original' => $originalProperty['price_original'],
                'price' => $originalProperty['price'],
                'currency_id' => $originalProperty['currency_id'],
                'storeys_no' => $originalProperty['storeys_no'],
                'year_builded' => $originalProperty['year_builded'],
                'country' => $originalProperty['country'],
                'city' => $originalProperty['city'],
                'address' => $originalProperty['address'],
            ]);
        }

        return $properties;
    }
}
