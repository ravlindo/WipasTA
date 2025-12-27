<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminGallery extends Controller
{
    /**
     * TAMPILKAN HALAMAN UTAMA (Form & Data)
     */
    public function index()
    {
        // Mengambil semua data gallery dari database
        $gallery = Gallery::all();

        // Pastikan file view Anda ada di: resources/views/admin/AdminGallery.blade.php
        return view('admin.AdminGalleryIndex', compact('gallery'));
    }
    public function form($id = null)
    {
        // Mengambil semua data gallery dari database
        $gallery = Gallery::all();

        // Jika ada ID, berarti mode edit
        $galleryItem = null;
        if ($id) {
            $galleryItem = Gallery::findOrFail($id);
        }

        // Pastikan file view Anda ada di: resources/views/admin/AdminGalleryForm.blade.php
        return view('admin.AdminGalleryForm', compact('gallery', 'galleryItem'));
    }

    /**
     * SIMPAN DATA BARU
     */
    public function store(Request $request)
    {


        // 1. Validasi Input
        $request->validate([
            'gambar'  => 'required|image|mimes:jpg,jpeg,png|max:2048', // Max 2MB
            'title'        => 'required|string|max:255',
            'deskripsi'    => 'required|string',
        ], [
            // Pesan Error Custom (Opsional)
            'gambar.required' => 'Gambar wajib diupload.',
            'gambar.max'      => 'Ukuran Gambar maksimal 2MB.',
            'title.required'       => 'Title tidak boleh kosong.',
            'title.max'            => 'Title maksimal 255 karakter.',
            'deskripsi.required'   => 'Deskripsi tidak boleh kosong.',
        ]);

        // 2. Proses Upload Gambar
        // Gambar akan disimpan di folder: storage/app/public/gallery
        $gambarPath  = $request->file('gambar')->store('gallery', 'public');

        // 3. Simpan ke Database
        Gallery::create([
            'gambar'  => $gambarPath,
            'title'        => $request->title,
            'deskripsi'    => $request->deskripsi,
        ]);

        // 4. Redirect kembali dengan pesan sukses
        return redirect()->route('gallery.index')->with('success', 'Data Gallery berhasil ditambahkan!');
    }

    /**
     * UPDATE DATA (Opsional, jika nanti butuh edit)
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'gambar'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'title'        => 'required|string|max:255',
            'deskripsi'    => 'required',
        ]);

        // Cek jika ada upload gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($gallery->gambar) {
                Storage::disk('public')->delete($gallery->gambar);
            }
            // Simpan gambar baru
            $gallery->gambar = $request->file('gambar')->store('gallery', 'public');
        }

        $gallery->title = $request->title;
        $gallery->deskripsi = $request->deskripsi;
        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Data Gallery berhasil diperbarui!');
    }

    /**
     * HAPUS DATA
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Hapus file fisik gambar dari storage
        if ($gallery->gambar) {
            Storage::disk('public')->delete($gallery->gambar);
        }

        // Hapus data dari database
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Data Gallery berhasil dihapus!');
    }
}
