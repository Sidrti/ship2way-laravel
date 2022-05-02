<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\ReportingCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportingCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
            'name' => 'required',
        ]);
        if(!$validated)
        {
           return redirect()->back()->withInput()->withErrors($validated);
        } 
        else 
        {
            $reportingCategory = new ReportingCategory;
            $reportingCategory->user_id = Auth::id();
            $reportingCategory->name = $request->name;
            $reportingCategory->save();
            return redirect()
            ->back()
            ->with('success', 'Saved !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReportingCategory  $reportingCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ReportingCategory $reportingCategory)
    {
        $reportingCategories = ReportingCategory::where('user_id','=',Auth::id())->get();
        return view('layouts.product.reportingCategory', ['reportingCategories' => $reportingCategories]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportingCategory  $reportingCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportingCategory $reportingCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportingCategory  $reportingCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportingCategory $reportingCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportingCategory  $reportingCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $reportingCategory = ReportingCategory::where('id', $request->id)->firstorfail()->delete();
        return redirect()->route('product.reporting-category');
    }
}
