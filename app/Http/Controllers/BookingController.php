<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;
use App\Mail\BookingNotification;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function store(BookingRequest $request)
    {
        // Simpan data booking ke database
        Booking::create($request->validated());

        // Kirim notifikasi email
        $bookingData = $request->all(); // Sesuaikan ini dengan struktur data booking Anda
        Mail::to($bookingData['email'])->send(new BookingNotification($bookingData));

        // Redirect atau berikan respons ke pengguna
        return redirect()->back()->with([
            'message' => "Success, we'll process your booking"
        ]);
    }
}
