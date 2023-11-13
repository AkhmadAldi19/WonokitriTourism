<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'number_phone' => 'required',
            'date' => ['required', 'date'],
            'travel_package_id' => 'required',
            'address' => 'required',
            'quantity' => 'required',
            'booking_code' => 'required', // Tambahkan aturan validasi untuk booking_code
            'status' => 'required|in:1,2', // Tambahkan aturan validasi untuk status dengan nilai 1 atau 2
        ];
    }
}
