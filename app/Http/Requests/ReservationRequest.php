<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'reservation.date' =>'required|date|max:10',
            'reservation.clinic_id' => 'required',
            'reservation.consultion_reason' => 'required',
            'reservation.child_id' => 'required',
        ];
    }
}

