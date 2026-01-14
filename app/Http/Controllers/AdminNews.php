<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminNews extends Controller
{
    /**
     * TAMPILKAN HALAMAN UTAMA (Form & Data)
     */
    public function index()
    {
        // Mengambil semua data news dari database
        $news = News::all();

        // Pastikan file view Anda ada di: resources/views/admin/AdminNewsIndex.blade.php
        return view('admin.AdminNewsIndex', compact('news'));
    }

    public function form($id = null)
    {
        // Mengambil semua data news dari database
        $news = News::all();

        // Jika ada ID, berarti mode edit
        $newsItem = null;
        if ($id) {
            $newsItem = News::findOrFail($id);
        }

        // Pastikan file view Anda ada di: resources/views/admin/AdminNewsForm.blade.php
        return view('admin.AdminNewsForm', compact('news', 'newsItem'));
    }

    /**
     * SIMPAN DATA BARU
     */
    public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Max 2MB, optional
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'publish_date' => 'nullable|date',
        ], [
            // Pesan Error Custom (Opsional)
            'image.max' => 'Ukuran Gambar maksimal 2MB.',
            'title.required' => 'Judul berita tidak boleh kosong.',
            'title.max' => 'Judul maksimal 255 karakter.',
            'content.required' => 'Konten berita tidak boleh kosong.',
            'publish_date.date' => 'Format tanggal tidak valid.',
        ]);

        // 2. Proses Upload Gambar (jika ada)
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news', 'public');
        }

        // 3. Simpan ke Database
        News::create([
            'image' => $imagePath,
            'title' => $request->title,
            'content' => $request->content,
            'publish_date' => $request->publish_date,
        ]);

        // 4. Redirect kembali dengan pesan sukses
        return redirect()->route('news.index')->with('success', 'Data Berita berhasil ditambahkan!');
    }

    /**
     * UPDATE DATA (Opsional, jika nanti butuh edit)
     */
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'publish_date' => 'nullable|date',
        ]);

        // Cek jika ada upload gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            // Simpan gambar baru
            $news->image = $request->file('image')->store('news', 'public');
        }

        $news->title = $request->title;
        $news->content = $request->content;
        $news->publish_date = $request->publish_date;
        $news->save();

        return redirect()->route('news.index')->with('success', 'Data Berita berhasil diperbarui!');
    }

    /**
     * HAPUS DATA
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        // Hapus file gambar dari storage
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        // Hapus data dari database
        $news->delete();

        return redirect()->route('news.index')->with('success', 'Data Berita berhasil dihapus!');
    }
}
