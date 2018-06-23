<?php

namespace App\Http\Controllers;

use App\Category;
use App\Technician;
use Illuminate\Http\Request;
use App\Http\Resources\Catogory\CategoryResource;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
        return view('category.category',['categories' => $categories]);

    }
    public function getCategories()
    {
        $categories= Category::all();
        $technicians=DB::table('technicians')
            ->join('specailities', 'specailities.id', '=', 'technicians.specaility_id')
            ->select('technicians.*', 'specailities.name')
            ->get();
        return view('home',['categories' => $categories,'technicians' => $technicians]);

    }
    public function indexforApi()
    {
        return Category::all();
        //return new BusResourceCollection(Bus::all());
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        return DB::table('categories')
            ->select('categories.*')->where('categories.id','=',$category)
            ->get();
//        return new CategoryResource($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
