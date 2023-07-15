<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\CreateRatingForProperty;
use App\Http\Requests\RatingRequest;
use Illuminate\Http\RedirectResponse;

final class RatingController extends Controller
{
    public function create(RatingRequest $request): RedirectResponse
    {
        CreateRatingForProperty::run($request->input('property_id'), $request->ip(), $request->input('value'));

        return to_route('realty', ['id' => $request->input('potential_id')]);
    }
}
