<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class RatingRequest extends FormRequest
{
    /**
     * @return array<string, string[]>
     */
    public function rules(): array
    {
        return [
            'potential_id' => ['required', 'numeric', 'min:1'],
            'property_id' => ['required'],
            'value' => ['required', 'numeric', 'min:1', 'max:5'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
