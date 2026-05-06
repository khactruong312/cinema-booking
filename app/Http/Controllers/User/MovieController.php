<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request){
        $query = Movie::query();

        if($request->filled('keyword')){
            $keyword = $request->keyword;

            $query->where('title','like','%' . $keyword . '%');
        }

        if($request->filled('genre')){
            $query->where('genre',$request->genre);
        }

         // Lọc theo quốc gia
        if ($request->filled('country')) {
            $query->where('country', $request->country);
        }

        //lọc trạng thái
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        } else {
            $query->where('status', 'now_showing');
        }

        $movies = $query
            ->latest()
            ->paginate(12)
            ->withQueryString();

        $genres = Movie::select('genre')
            ->whereNotNull('genre')
            ->distinct()
            ->pluck('genre');

        $countries = Movie::select('country')
            ->whereNotNull('country')
            ->distinct()
            ->pluck('country');

        return view('user.movies.index', compact(
            'movies',
            'genres',
            'countries'
        ));
    }
}
