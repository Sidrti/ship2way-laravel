<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\PresetGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\Preset;

use Validator;

class PresetGroupController extends Controller
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
        $validated = Validator::make($request->all(), [
            'name' => 'required',
            'dimension_width' => 'required',
            'dimension_height' => 'required',
            'dimension_length' => 'required',
            'weight' => 'required',
            'domestic_service' => 'required',
            'domestic_package' => 'required',
            'domestic_confirmation' => 'required',
            'international_service' => 'required',
            'international_package' => 'required',
            'international_confirmation' => 'required',
        ]);
        if($validated->fails())
        {
            $errors = $validated->errors();
            return redirect()->back()->withInput()->withErrors($errors);
        } 
        else 
        {
            $presetGroup = new PresetGroup();
            $presetGroup->user_id = Auth::id();
            $presetGroup->name = $request->name;
            $presetGroup->description = $request->description;
            $presetGroup->origin_country = $request->origin_country;
            $presetGroup->harmonization_code = $request->harmonization_code;
            $presetGroup->declared_value = $request->declared_value;
            $presetGroup->dimension = $request->dimension_length.' X '.$request->dimension_width.' X '.$request->dimension_height;
            $presetGroup->weight = $request->weight;
            $presetGroup->domestic_service = $request->domestic_service;
            $presetGroup->domestic_package = $request->domestic_package;
            $presetGroup->domestic_confirmation = $request->domestic_confirmation;
            $presetGroup->international_service = $request->international_service;
            $presetGroup->international_package = $request->international_package;
            $presetGroup->international_confirmation = $request->international_confirmation;
            $presetGroup->save();
            return redirect()
            ->back()
            ->with('success', 'Saved !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PresetGroup  $presetGroup
     * @return \Illuminate\Http\Response
     */
    public function show(PresetGroup $presetGroup)
    {
        $presetGroups = PresetGroup::where('user_id','=',Auth::id())->get();
        return view('layouts.product.presetGroup', ['presetGroups' => $presetGroups]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PresetGroup  $presetGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(PresetGroup $presetGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PresetGroup  $presetGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PresetGroup $presetGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PresetGroup  $presetGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {        
        $presetGroup = PresetGroup::where('id', $request->id)->firstorfail()->delete();
        return redirect()->route('product.preset-group');
    }
}
