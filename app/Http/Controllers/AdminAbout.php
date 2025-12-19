<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminAbout extends Controller
{
    /**
     * TAMPILKAN HALAMAN UTAMA (Form & Data)
     */
    public function index()
    {
        // Mengambil semua data about dari database
        $about = About::all();

        // Pastikan file view Anda ada di: resources/views/admin/AdminAbout.blade.php
        return view('admin.AdminIndex', compact('about'));
    }
    public function form()
    {
        // Mengambil semua data about dari database
        $about = About::all();

        // Pastikan file view Anda ada di: resources/views/admin/AdminAbout.blade.php
        return view('admin.AdminFormAbout', compact('about'));
    }

    /**
     * SIMPAN DATA BARU
     */
    public function store(Request $request)
    {


        // 1. Validasi Input
        $request->validate([
            'gambar_gede'  => 'required|image|mimes:jpg,jpeg,png|max:2048', // Max 2MB
            'gambar_kanan' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'title'        => 'required|string|max:255',
            'deskripsi'    => 'required|string',
        ], [
            // Pesan Error Custom (Opsional)
            'gambar_gede.required' => 'Gambar Gede wajib diupload.',
            'gambar_gede.max'      => 'Ukuran Gambar Gede maksimal 2MB.',
            'gambar_kanan.required'=> 'Gambar Kanan wajib diupload.',
            'title.required'       => 'Title tidak boleh kosong.',
            'title.max'            => 'Title maksimal 255 karakter.',
            'deskripsi.required'   => 'Deskripsi tidak boleh kosong.',
        ]);

        // 2. Proses Upload Gambar
        // Gambar akan disimpan di folder: storage/app/public/about
        $gambarGedePath  = $request->file('gambar_gede')->store('about', 'public');
        $gambarKananPath = $request->file('gambar_kanan')->store('about', 'public');

        // 3. Simpan ke Database
        About::create([
            'gambar_besar'  => $gambarGedePath,
            'gambar_kanan' => $gambarKananPath,
            'title'        => $request->title,
            'deskripsi'    => $request->deskripsi,
        ]);

        // 4. Redirect kembali dengan pesan sukses
        return redirect()->route('about.index')->with('success', 'Data About berhasil ditambahkan!');
    }

    /**
     * UPDATE DATA (Opsional, jika nanti butuh edit)
     */
    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $request->validate([
            'gambar_gede'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar_kanan' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'title'        => 'required|string|max:255',
            'deskripsi'    => 'required',
        ]);

        // Cek jika ada upload gambar gede baru
        if ($request->hasFile('gambar_gede')) {
            // Hapus gambar lama
            if ($about->gambar_besar) {
                Storage::disk('public')->delete($about->gambar_besar);
            }
            // Simpan gambar baru
            $about->gambar_besar = $request->file('gambar_gede')->store('about', 'public');
        }

        // Cek jika ada upload gambar kanan baru
        if ($request->hasFile('gambar_kanan')) {
            // Hapus gambar lama
            if ($about->gambar_kanan) {
                Storage::disk('public')->delete($about->gambar_kanan);
            }
            // Simpan gambar baru
            $about->gambar_kanan = $request->file('gambar_kanan')->store('about', 'public');
        }

        $about->title = $request->title;
        $about->deskripsi = $request->deskripsi;
        $about->save();

        return redirect()->route('about.index')->with('success', 'Data About berhasil diperbarui!');
    }

    /**
     * HAPUS DATA
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);

        // Hapus file fisik gambar dari storage
        if ($about->gambar_besar) {
            Storage::disk('public')->delete($about->gambar_besar);
        }
        if ($about->gambar_kanan) {
            Storage::disk('public')->delete($about->gambar_kanan);
        }

        // Hapus data dari database
        $about->delete();

        return redirect()->route('about.index')->with('success', 'Data About berhasil dihapus!');
    }
}
