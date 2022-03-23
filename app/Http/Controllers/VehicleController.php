<?php

namespace App\Http\Controllers;
use App\Vehicle;
use DB;
use Str;
use Auth;
use App\Brand;
use App\Make;
use App\Gallery;
use Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $vehicles = DB::table('vehicles')
                        ->leftJoin('brands', 'brands.id', '=', 'vehicles.brand')
                        ->leftJoin('makes', 'makes.id', '=', 'vehicles.make')
                        ->where('vehicles.user_id', $user_id)
                        ->select('vehicles.*', 'brands.name as brand_name', 'makes.model as model_name')
                        ->get();
        return view('vehicle.index', compact('vehicles'));
    }
    public function create()
    {
        $brands = Brand::get();
        return view('vehicle.create', compact('brands'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'vehicle_type' => 'required|string',
            'brand' => 'required',
            'make' => 'required',
            'usage' => 'required|string',
            'name' => 'required|string|unique:vehicles',
            'year' => 'required|string',
            'price' => 'required',
            'colour' => 'required|string',
            'transmission' => 'required|string',
            'fuel_type' => 'required|string',
            'number_of_gear' => 'required',
            'drive_type' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $user_id = Auth::user()->id;
        $data = [
            'user_id' => $user_id, 
            'vehicle_type' => $request->vehicle_type, 
            'brand' => $request->brand, 
            'make' => $request->make, 
            'usage' => $request->usage, 
            'name' => $request->name, 
            'slug' => Str::slug(Str::lower($request->name), '-'),
            'year' => $request->year, 
            'millage' => $request->millage, 
            'price' => $request->price,
            'colour' => $request->colour, 
            'transmission' => $request->transmission, 
            'fuel_type' => $request->fuel_type, 
            'engine_number' => $request->engine_number, 
            'number_of_gear' => $request->number_of_gear, 
            'drive_type' => $request->drive_type, 
            'body_style' => $request->body_style, 
            'number_of_door' => $request->door, 
            'horse_type' => $request->horse_type, 
            'location' => $request->location, 
            'description' => $request->description, 
            'video_url' => $request->video_url
        ];
        function storeImage($image, $path, $width, $height){
    

            $image_name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = $path;

             $resize_image = Image::make($image->getRealPath());

             $resize_image->resize($width, $height, function($constraint){
              $constraint->aspectRatio();
             })->save($destinationPath . '/' . $image_name);

             return $image_name;
        }
        if ($request->file('featured_image')) {
            $featured_image = $request->file('featured_image');
            $data['featured_image'] = storeImage($featured_image, 'images/vehicles', 800, 420);
        }
        
        Vehicle::create($data);
        return redirect('/vehicle')->with('success', 'Vehicle added successfuly');
    }
    public function show($id)
    {
        $vehicle = DB::table('vehicles')
                        ->leftJoin('brands', 'brands.id', '=', 'vehicles.brand')
                        ->leftJoin('makes', 'makes.id', '=', 'vehicles.make')
                        ->where('vehicles.id', $id)
                        ->select('vehicles.*', 'brands.name as brand_name', 'makes.model as model_name')
                        ->first();
        $images = Gallery::where('vehicle_id', $vehicle->id)->get();
        return view('vehicle.show', compact('vehicle', 'images'));
    }
    public function approveVehicle($id)
    {
        Vehicle::where('id', $id)->update([
            'approved' => true
        ]);
        return redirect()->route('vehicle.all')->with('success', 'You have successfully approved a vehicle');
    }
    public function model(Request $request)
    {
        $brand_id = $request->brand_id;
        $makes = Make::where('brand_id', $brand_id)->get();
        return response()->json($makes);
    }
    public function edit($id)
    {
        $vehicle = Vehicle::where('id', $id)->first();
        $brands = Brand::get();
        return view('vehicle.edit', compact('vehicle', 'brands'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'vehicle_type' => 'required|string',
            'brand' => 'required',
            'make' => 'required',
            'usage' => 'required|string',
            'name' => 'required|string',
            'year' => 'required|string',
            'price' => 'required',
            'colour' => 'required|string',
            'transmission' => 'required|string',
            'fuel_type' => 'required|string',
            'number_of_gear' => 'required',
            'drive_type' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string'
        ]);
        $data = [ 
            'vehicle_type' => $request->vehicle_type, 
            'brand' => $request->brand, 
            'make' => $request->make, 
            'usage' => $request->usage, 
            'name' => $request->name, 
            'slug' => Str::slug(Str::lower($request->name), '-'),
            'year' => $request->year, 
            'millage' => $request->millage, 
            'price' => $request->price,
            'colour' => $request->colour, 
            'transmission' => $request->transmission, 
            'fuel_type' => $request->fuel_type, 
            'engine_number' => $request->engine_number, 
            'number_of_gear' => $request->number_of_gear, 
            'drive_type' => $request->drive_type, 
            'body_style' => $request->body_style, 
            'number_of_door' => $request->door, 
            'horse_type' => $request->horse_type, 
            'location' => $request->location, 
            'description' => $request->description, 
            'video_url' => $request->video_url
        ];
        Vehicle::where('id', $id)->update($data);
        return redirect()->route('vehicle.index')->with('success', 'Vehicle Updated');
    }
    public function allVehicles()
    {
        $vehicles = DB::table('vehicles')
                        ->leftJoin('brands', 'brands.id', '=', 'vehicles.brand')
                        ->leftJoin('makes', 'makes.id', '=', 'vehicles.make')
                        ->select('vehicles.*', 'brands.name as brand_name', 'makes.model as model_name')
                        ->get();
        return view('vehicle.all_vehicles', compact('vehicles'));
    }
}
