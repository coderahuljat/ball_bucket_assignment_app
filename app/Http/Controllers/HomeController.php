<?php

namespace App\Http\Controllers;

use App\Models\Ball;
use App\Models\BallBucketAssignment;
use App\Models\Bucket;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        $buckets = Bucket::select('id', 'name', 'capacity')->withSum('assignments', 'occupied_capacity')->get();

        $balls = Ball::all();
        $assignments = BallBucketAssignment::all();

        return view('home', [
            'buckets' => $buckets,
            'balls' => $balls,
            'assignments' => $assignments,
        ]);
    }
}
