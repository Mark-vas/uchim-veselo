<?php

namespace App\Http\Controllers;

use App\Models\CourseReview;
use Illuminate\Http\Request;

class CourseReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CourseReview::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseReview  $courseReview
     * @return \Illuminate\Http\Response
     */
    public function show(CourseReview $courseReview)
    {
        return $courseReview;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseReview  $courseReview
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseReview $courseReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseReview  $courseReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseReview $courseReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseReview  $courseReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseReview $courseReview)
    {
        //
    }
}
