<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\News;
use Illuminate\Http\Request;

class AdminDasboard extends Controller
{
    public function index() {
        // Get statistics for dashboard
        $totalGalleries = Gallery::count();
        $totalTestimonials = Testimonial::count();
        $totalNews = News::count();
        $totalAbout = About::count();

        // Get recent activities
        $recentGalleries = Gallery::latest()->take(5)->get();
        $recentTestimonials = Testimonial::latest()->take(5)->get();
        $recentNews = News::latest()->take(5)->get();

        // Get monthly statistics (simplified - you can enhance this with actual date filtering)
        $currentMonthGalleries = Gallery::whereMonth('created_at', date('m'))->count();
        $currentMonthTestimonials = Testimonial::whereMonth('created_at', date('m'))->count();
        $currentMonthNews = News::whereMonth('created_at', date('m'))->count();

        return view("admin.dasboard", compact(
            'totalGalleries',
            'totalTestimonials',
            'totalNews',
            'totalAbout',
            'recentGalleries',
            'recentTestimonials',
            'recentNews',
            'currentMonthGalleries',
            'currentMonthTestimonials',
            'currentMonthNews'
        ));
    }
}
