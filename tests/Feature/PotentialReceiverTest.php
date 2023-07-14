<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Lib\MockVtiger;
use App\Lib\VtigerInterface;
use Inertia\Testing\AssertableInertia as Assert;

class PotentialReceiverTest extends \Tests\TestCase
{
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
}
