<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Lib\MockVtiger;
use App\Lib\VtigerInterface;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Inertia\Testing\AssertableInertia as Assert;

class PotentialReceiverTest extends \Tests\TestCase
{
    use DatabaseMigrations;

    public function testReceivingUserModelFromVtiger(): void
    {
        $this->withoutExceptionHandling();
        $this->app->bind(VtigerInterface::class, MockVtiger::class);
        $this->get('/165')->assertInertia(
            fn (Assert $page) => $page->component('Realty')->has('manager',
                fn (Assert $page) => $page->where('first_name', 'John')->where('last_name', 'Doe')->where('email', 'john@mail.ru')->etc()
            )
        );
    }

    public function testReceivingPotentialModelFromVtiger(): void
    {
        $this->withoutExceptionHandling();
        $this->app->bind(VtigerInterface::class, MockVtiger::class);
        $this->get('/165')->assertInertia(
            fn (Assert $page) => $page->component('Realty')->has('potential',
                fn (Assert $page) => $page->where('potentialname', 'Super new propertied')->where('description', 'Some interesting description')->etc()
            )
        );
    }

    public function testReceivingPropertiesFromVtiger(): void
    {
        $this->withoutExceptionHandling();
        $this->app->bind(VtigerInterface::class, MockVtiger::class);
        $this->get('/165')->assertInertia(
            fn (Assert $page) => $page->component('Realty')->has('properties',
                fn (Assert $page) => $page->where('0.property_description_ext', 'Some description about appartment complex')->where('0.price', 234132)->where('0.project_pres', 'some presentation about appartment')->where('0.documents.0.file_content', 'SOME_CONTENT_BASE64')->etc()
            )
        );
    }
}
