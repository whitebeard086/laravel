<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listing.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]); 
    }

    // Show single listing
    public function show(Listing $listing) {
        return view('listing.show', [
            'listing' => $listing
        ]);
    }

    // Show form to create new listing
    public function create() {
        return view('listing.create');
    }
}