<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\VtigerConnector;
use Inertia\Inertia;
use Inertia\Response;
use Salaros\Vtiger\VTWSCLib\WSException;

final class RealtyController extends Controller
{
    public function __invoke(string $id): Response
    {
        try {
            $service = app(VtigerConnector::class);
        } catch (WSException $e) {
            \Log::error("VtigerConnector error: {$e->getMessage()}");
            abort(403, 'Can not connect to CRM');
        }

        return Inertia::render('Realty', [
            'id' => $id,
            'manager' => $service->getAssignedUserModel($id),
        ]);
    }
}
