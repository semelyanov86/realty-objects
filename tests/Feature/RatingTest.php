<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Actions\GetRatingByProperty;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RatingTest extends \Tests\TestCase
{
    use DatabaseMigrations;

    public function testCreationOfNewRating(): void
    {
        $this->post('/rating', [
            'potential_id' => 16,
            'property_id' => '1x3',
            'value' => 4,
        ])->assertRedirect('/16');

        $ratings = \App\Models\Rating::all();
        $this->assertCount(1, $ratings);
        $this->assertEquals(4, $ratings->first()->value);

        $this->assertEquals(4, GetRatingByProperty::run('1x3'));
    }
}
