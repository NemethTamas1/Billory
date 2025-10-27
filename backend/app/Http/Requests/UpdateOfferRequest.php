<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOfferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "offer_number" => ["required", "string", "max:50"],
            "customer_id" => ["required", "integer", "exists:users,id"],
            "status" => ["required", "string", "max:8"],
            "valid_until" => ["required", "date"],
            "currency" => ["required", "string", "max:10"],

            "tax_percent" => ["nullable", "integer"],

            "items" => ["required", "array", "min:1"],
            "items.*.name" => ["required", "string"],
            "items.*.price" => ["required", "numeric", "min:0"],
            "items.*.quantity" => ["required", "numeric", "min:1"],
            "items.*.quantity_type" => ["required", "string"],
        ];
    }
}
