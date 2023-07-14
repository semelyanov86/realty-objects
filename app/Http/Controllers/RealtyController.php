<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\VtigerConnector;
use Inertia\Inertia;
use Inertia\Response;
use Salaros\Vtiger\VTWSCLib\WSException;

final class RealtyController extends Controller
{
    public function __invoke(int $id): Response
    {
        try {
            $service = app(VtigerConnector::class);
        } catch (WSException $e) {
            \Log::error("VtigerConnector error: {$e->getMessage()}");
            abort(403, 'Can not connect to CRM');
        }

        $potential = $service->getPotentialById($id);
        if ($potential === null) {
            abort(404, 'Potential not found');
        }

        $manager = $service->getAssignedUserModel($potential->assigned_user_id);
        if ($manager === null) {
            abort(404, 'Manager not found');
        }

        $properties = $service->getRelatedProperties($potential->id);

        return Inertia::render('Realty', [
            'id' => $id,
            'manager' => $manager,
            'potential' => $potential,
            'properties' => $properties,
        ]);
    }
}
