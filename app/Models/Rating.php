<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'ip_address',
        'value',
    ];
}
