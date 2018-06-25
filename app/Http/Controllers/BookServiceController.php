<?php

namespace App\Http\Controllers;

use App\BookService;
use App\Events\NotificationBroadcast;
use Illuminate\Http\Request;

class BookServiceController extends Controller
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        $bookservice = new BookService;
//        $bookservice->brand_name = $request->input('brand_name');
//        $bookservice->item_name = $request->input('item_name');
//        $bookservice->fault = $request->input('fault');
//        $bookservice->technician_id = $request->input('technician_id');
//        $bookservice->dateOfBooking = $request->input('dateOfBooking');
//        $bookservice->timeOfBooking = $request->input('timeOfBooking');
//
//
//        if ($bookservice->save()) {
//            Event(new NotificationBroadcast($bookservice));
//            return $bookservice;
//        }
//
//
//        throw new HttpException(400, "Invalid data");
//    }
    public function store(Request $request, $id)
    {
//        $this->validate($request , [
//            'brand_name' => 'required',
//            'item_name' => 'required',
//            'fault' => 'required',
//            'technician_id' => 'required',
//
//
//        ]);
        $data=array(
            'brand_name'=> $request->input('brand_name'),
            'item_name'=> $request->input('item_name'),
            'fault' => $request->input('fault'),
            'technician_id' => $request->input('technician_id'),
            'dateOfBooking' => $request->input('dateOfBooking'),
            'timeOfBooking' => $request->input('timeOfBooking')
        );
        BookService::where('id',$id)->update($data);

//        if ($bookservice->save()) {
//            Event(new NotificationBroadcast($bookservice));
//            return $bookservice;
//        }


        throw new HttpException(400, "Invalid data");
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\BookService $bookService
     * @return \Illuminate\Http\Response
     */
    public function show(BookService $bookService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookService $bookService
     * @return \Illuminate\Http\Response
     */
    public function edit(BookService $bookService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\BookService $bookService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

//        $bookservice =BookService::find($id);
//        $bookservice->update($request->all());


//       $bookservice = BookService::find($id)->update($request->all());
//        if($bookservice)
//        {
//            return response()->json([
//            $bookservice,
//        ], 200);
//        }
//        return response()->json([
//            $bookService,
//        ], 200);
//        if (!$id) {
//            throw new HttpException(400, "Invalid id");
//        }
//
        $bookservice = BookService::find($id);
        $bookservice->brand_name = $request->input('brand_name');
        $bookservice->item_name = $request->input('item_name');
        $bookservice->fault = $request->input('fault');
        $bookservice->technician_id = $request->input('technician_id');
        $bookservice->dateOfBooking = $request->input('dateOfBooking');
        $bookservice->timeOfBooking = $request->input('timeOfBooking');
        //  $bookservice->save($request->all());
        if ($bookservice->save()) {
            return $bookservice;
        }

        throw new HttpException(400, "Invalid data");

    }

    public function bookservice()
    {
        return BookService::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookService $bookService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }
        $bookService = BookService::find($id);
        $bookService->delete();
        return response()->json([
            'message' => 'Service deleted',
        ], 200);
    }
}
