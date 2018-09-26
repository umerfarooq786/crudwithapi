<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\DB;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
//        $item= Item::all();
        $item=DB::table('items')
            ->join('categories', 'categories.id', '=', 'items.category_id')
            ->select('items.*', 'categories.name')
            ->get();
//        DD($item);
        return view('Item.item',['items' => $item ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getItem($id)
    {
        $items=DB::table('items')
            ->select('items.*')
            ->where('items.category_id', '=', $id)
            ->get();

         return view('item.selectitem',['items' => $items ]);
//        return $items;
    }
    public function create(Request $request)
    {
        $this->validate($request , [
            'item_name' => 'required',
            'category_id' => 'required'
        ]);

            $item= new Item;
            $item->item_name=$request->input('item_name');
            $item->category_id=$request->input('category_id');
            $item->save();

            return redirect('/item')->with('info','Record Saved Successfully !');

    }
    public function getCategory()
    {
        $categories= Category::all();
        return view('Item.createitem',['categories' => $categories]);
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
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
