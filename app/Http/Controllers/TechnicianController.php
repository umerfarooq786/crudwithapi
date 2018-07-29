<?php

namespace App\Http\Controllers;

use App\Technician;
use Illuminate\Http\Request;
use App\Http\Resources\Technician\TechnicianResource;
use App\Specaility;
use Illuminate\Support\Facades\DB;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$technician= Technician::all();
        $technician=DB::table('technicians')
            ->join('specailities', 'specailities.id', '=', 'technicians.specaility_id')
            ->select('technicians.*', 'specailities.name')
            ->get();

        return view('Technician.technician',['technicians' => $technician ]);
    }
    public function indexforApi()
    {
        $technician=DB::table('technicians')
            ->join('specailities', 'specailities.id', '=', 'technicians.specaility_id')
            ->select('technicians.*', 'specailities.name')
            ->get();
        return $technician;
        //return Technician::all();
        //return new BusResourceCollection(Bus::all());
    }
    public function getSpecaility()
    {
        $specailities= Specaility::all();
        return view('Technician.createtechnician',['specailities' => $specailities]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request , [
            'name' => 'required',
            'cnic' => 'required',
            'email' => 'required',
            'address' => 'required',
            'status' => 'required',
            'phone' => 'required',
            'experience' => 'required',
            'rating' => 'required',
            'image' => 'required',
            'specaility_id' => 'required'
        ]);
        if($request->hasFile('image'))
        {
        $technician= new Technician;
        $technician->name=$request->input('name');
        $technician->cnic=$request->input('cnic');
        $technician->email=$request->input('email');
        $technician->address=$request->input('address');
        $technician->status=$request->input('status');
        $technician->phone=$request->input('phone');
        $technician->experience=$request->input('experience');
        $technician->rating=$request->input('rating');
        $filename= $request->image->getClientOriginalName();
        $request->image->storeAs('public/upload/',$filename);
        $technician->image=$filename;
        $technician->specaility_id=$request->input('specaility_id');
        $technician->save();

        return redirect('/technician')->with('info','Record Saved Successfully !');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function postnear(Request $request)
    {
        $longitude=$request->input('longitude');
        $latitude=$request->input('latitude');
        $radius=5;



        $technician=DB::table('technicians')
            ->join('specailities', 'specailities.id', '=', 'technicians.specaility_id')
            ->select('technicians.*', 'specailities.name')
            ->select('technicians.*')->selectRaw('( 6371 * acos( cos( radians(?) ) *
                               cos( radians( latitude ) )
                               * cos( radians( longitude ) - radians(?)
                               ) + sin( radians(?) ) *
                               sin( radians( latitude ) ) )
                             ) AS distance ', [$latitude, $longitude, $latitude])
            ->havingRaw("distance < ?", [$radius])->orderBy('distance', 'ASC')
            ->get();
        return json_encode($technician);
        /*$technician = Technician::select('technicians.*')->selectRaw('( 6371 * acos( cos( radians(?) ) *
                               cos( radians( latitude ) )
                               * cos( radians( longitude ) - radians(?)
                               ) + sin( radians(?) ) *
                               sin( radians( latitude ) ) )
                             ) AS distance ', [$latitude, $longitude, $latitude])
            ->havingRaw("distance < ?", [$radius])->orderBy('distance', 'ASC')
            ->get();*/


        $response=array();
        //$q=User::where('contact_no',$request->input('contact_no'))->get();

        /*  foreach ($technician as $id) {
              $response['t_name']=$id->t_name;
              $response['email']=$id->email;
              $response['phone']=$id->phone;
              $response['cnic']=$id->cnic;
              $response['specaility_id']=$id->specaility_id;
              $response['experience']=$id->experience;
              $response['address']=$id->address;
              $response['password']=$id->password;
              $response['status']=$id->status;
              $response['rating']=$id->rating;
              $response['image']=$id->image;

          }
       */
    }



    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function show($technician)
    {
        return DB::table('technicians')
            ->join('specailities', 'specailities.id', '=', 'technicians.specaility_id')
            ->select('technicians.*', 'specailities.name')->where('technicians.id','=',$technician)
            ->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function edit(Technician $technician)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Technician $technician)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technician $technician)
    {
        //
    }
}
