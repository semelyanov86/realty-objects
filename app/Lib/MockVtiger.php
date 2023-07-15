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

    const MOCK_PROPERTY = [
        'id' => '32x454',
        'externalid' => '123456',
        'property_type' => 'Apartment',
        'project' => '',
        'property_category' => 'Residential',
        'project_pres' => 'some presentation about appartment',
        'arcitectural_style' => 'Modern',
        'residence_status' => 'New',
        'complex_description' => 'Some description about complex',
        'property_description_ext' => 'Some description about appartment complex',
        'property_rights' => 'Property Rights',
        'security' => 'Security',
        'price_original' => '1000000',
        'price' => 234132,
        'currency_id' => '2',
        'storeys_no' => '5',
        'year_builded' => '2019',
        'country' => 'Russia',
        'city' => 'Moscow',
        'address' => 'Some address',
    ];

    public const MOCKED_DOCUMENT = [
        'id' => '1x5',
        'notes_title' => 'Some title',
        'filename' => 'some_file.pdf',
        'filetype' => 'application/pdf',
        'filesize' => '123456',
        'filelocationtype' => 'I',
        'filestatus' => 'on',
        'filedownloadcount' => '0',
        'fileversion' => '1',
        'createdtime' => '2020-01-01 00:00:00',
        'modifiedtime' => '2020-01-01 00:00:00',
        'notecontent' => 'Some content',
        'assigned_user_id' => '1x5',
        'folderid' => '1x5',
        'note_no' => '1',
        'modifiedby' => '1x5',
        'source' => 'CRM',
        'starred' => '0',
        'tags' => '',
        'imageattachmentids' => '4x234',
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
        if ($label == 'Documents') {
            return [self::MOCKED_DOCUMENT];
        }

        return [self::MOCK_PROPERTY];
    }

    public function fileRetrieve(string $attachmentId): string
    {
        return 'SOME_CONTENT_BASE64';
    }
}
