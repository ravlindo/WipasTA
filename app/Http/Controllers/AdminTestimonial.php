<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTestimonial extends Controller
{
    /**
     * TAMPILKAN HALAMAN UTAMA (Form & Data)
     */
    public function index()
    {
        // Mengambil semua data testimonial dari database
        $testimonials = Testimonial::all();

        // Pastikan file view Anda ada di: resources/views/admin/AdminTestimonialIndex.blade.php
        return view('admin.AdminTestimonialIndex', compact('testimonials'));
    }

    public function form($id = null)
    {
        // Mengambil semua data testimonial dari database
        $testimonials = Testimonial::all();

        // Jika ada ID, berarti mode edit
        $testimonialItem = null;
        if ($id) {
            $testimonialItem = Testimonial::findOrFail($id);
        }

        // Pastikan file view Anda ada di: resources/views/admin/AdminTestimonialForm.blade.php
        return view('admin.AdminTestimonialForm', compact('testimonials', 'testimonialItem'));
    }

    /**
     * SIMPAN DATA BARU
     */
    public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Max 2MB, optional
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ], [
            // Pesan Error Custom (Opsional)
            'image.max' => 'Ukuran Gambar maksimal 2MB.',
            'name.required' => 'Nama tidak boleh kosong.',
            'name.max' => 'Nama maksimal 255 karakter.',
            'message.required' => 'Pesan testimonial tidak boleh kosong.',
            'rating.required' => 'Rating tidak boleh kosong.',
            'rating.min' => 'Rating minimal 1.',
            'rating.max' => 'Rating maksimal 5.',
        ]);

        // 2. Proses Upload Gambar (jika ada)
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonials', 'public');
        }

        // 3. Simpan ke Database
        Testimonial::create([
            'image' => $imagePath,
            'name' => $request->name,
            'message' => $request->message,
            'rating' => $request->rating,
        ]);

        // 4. Redirect kembali dengan pesan sukses
        return redirect()->route('testimonial.index')->with('success', 'Data Testimonial berhasil ditambahkan!');
    }

    /**
     * UPDATE DATA (Opsional, jika nanti butuh edit)
     */
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Cek jika ada upload gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($testimonial->image) {
                Storage::disk('public')->delete($testimonial->image);
            }
            // Simpan gambar baru
            $testimonial->image = $request->file('image')->store('testimonials', 'public');
        }

        $testimonial->name = $request->name;
        $testimonial->message = $request->message;
        $testimonial->rating = $request->rating;
        $testimonial->save();

        return redirect()->route('testimonial.index')->with('success', 'Data Testimonial berhasil diperbarui!');
    }

    /**
     * HAPUS DATA
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Hapus file gambar dari storage
        if ($testimonial->image) {
            Storage::disk('public')->delete($testimonial->image);
        }

        // Hapus data dari database
        $testimonial->delete();

        return redirect()->route('testimonial.index')->with('success', 'Data Testimonial berhasil dihapus!');
    }
}
