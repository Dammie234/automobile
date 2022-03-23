<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Brand;
class FrontendController extends Controller
{
    public function index()
    {
        $brands = Brand::get();
        $vehicles = DB::table('vehicles')
                        ->leftJoin('brands', 'brands.id', '=', 'vehicles.brand')
                        ->leftJoin('makes', 'makes.id', '=', 'vehicles.make')
                        ->where('vehicles.approved', true)
                        ->select('vehicles.*', 'brands.name as brand_name', 'makes.model as model_name')
                        ->take(6)
                        ->get();
        return view('welcome', compact('brands', 'vehicles'));
    }
    public function listings()
    {
        $brands = Brand::get();
        $vehicles = DB::table('vehicles')
                        ->leftJoin('brands', 'brands.id', '=', 'vehicles.brand')
                        ->leftJoin('makes', 'makes.id', '=', 'vehicles.make')
                        ->where('vehicles.approved', true)
                        ->select('vehicles.*', 'brands.name as brand_name', 'makes.model as model_name')
                        ->get();
        return view('listings', compact('vehicles', 'brands'));
    }
    public function vehicle($slug)
    {
        $brands = Brand::get();
        $vehicle = DB::table('vehicles')
                        ->leftJoin('brands', 'brands.id', '=', 'vehicles.brand')
                        ->leftJoin('makes', 'makes.id', '=', 'vehicles.make')
                        ->where('vehicles.slug', $slug)
                        ->select('vehicles.*', 'brands.name as brand_name', 'makes.model as model_name')
                        ->first();
        return view('vehicle', compact('brands', 'vehicle'));
    }
    public function search(Request $request)
    {
        $brand = $request->brand;
        $model = $request->model;
        $year = $request->year;
        $location = $request->location;
        $vehicle_type = $request->vehicle_type;
        $usage = $request->usage;
        $brands = Brand::get();
        $vehicles = DB::table('vehicles')
                        ->leftJoin('brands', 'brands.id', '=', 'vehicles.brand')
                        ->leftJoin('makes', 'makes.id', '=', 'vehicles.make')
                        ->where([
                                ['vehicles.approved', '=', true],
                                ['vehicles.brand', '=', $brand],
                                ['vehicles.make', '=', $model]
                            ])
                        ->orWhere([
                            ['vehicles.approved', '=', true],
                            ['vehicles.brand', '=', $brand],
                            ['vehicles.make', '=', $model],
                            ['vehicles.year', '=', $year],
                            ['vehicles.location', '=', $location],
                            ['vehicles.vehicle_type', '=', $vehicle_type],
                            ['vehicle.usage', '=', $usage]
                        ])
                        ->select('vehicles.*', 'brands.name as brand_name', 'makes.model as model_name')
                        ->get();
        dd($vehicles);
        return view('search', compact('vehicles', 'brands'));
    }
}
