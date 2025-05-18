<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Store a newly created testimonial in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pekerjaan' => 'nullable|string|max:255',
            'pesan' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $testimonial = new Testimonial();
        $testimonial->nama = $request->nama;
        $testimonial->pekerjaan = $request->pekerjaan;
        $testimonial->pesan = $request->pesan;
        $testimonial->is_active = false; // Default tidak aktif, menunggu persetujuan admin
        
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('testimonials', 'public');
            $testimonial->photo = $path;
        }

        $testimonial->save();

        return redirect()->back()
            ->with('success', 'Terima kasih! Testimonial Anda telah dikirim dan akan ditampilkan setelah diverifikasi oleh admin.');
    }
}