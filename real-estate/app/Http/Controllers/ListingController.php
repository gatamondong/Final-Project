<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        // Sample listings array (replace this with database data later)
        $listings = [
            ['title' => 'Beachfront Lot in Pangasinan', 'location' => 'Dasol, Pangasinan', 'price' => '₱2,500,000'],
            ['title' => 'Condo in Baguio City', 'location' => 'Sofia Terraces, Baguio', 'price' => '₱4,800,000'],
            ['title' => 'Modern Transient House', 'location' => 'San Fernando, La Union', 'price' => '₱3,200/night']
        ];

        return view('listings.index', compact('listings'));
    }
}