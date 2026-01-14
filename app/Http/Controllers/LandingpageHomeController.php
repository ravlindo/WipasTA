<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\News;
use Illuminate\Http\Request;

class LandingpageHomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $galleries = Gallery::limit(6)->get(); // Get first 6 galleries for homepage
        $news = News::orderBy('publish_date', 'desc')->limit(3)->get(); // Get latest 3 news for homepage
        return view("index", compact('about', 'galleries', 'news'));
    }
    public function testimoni()
    {
        $testimonials = Testimonial::all();
        return view("testimoni", compact('testimonials'));
    }

    public function submitTestimonial(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Max 2MB, optional
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ], [
            // Pesan Error Custom
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
        return redirect()->route('testimoni.home')->with('success', 'Terima kasih atas testimonial Anda!');
    }
    public function login()
    {
        return view("login");
    }
    public function register()
    {
        return view("register");
    }
    public function about()
    {
        $about = About::first();
        return view("about", compact('about'));
    }

    public function galeri()
    {
        $galleries = Gallery::all();
        return view("Galery", compact('galleries'));
    }

    public function news()
    {
        $news = News::orderBy('publish_date', 'desc')->get();
        return view("news", compact('news'));
    }
}
