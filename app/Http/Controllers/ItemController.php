<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\User;

class ItemController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $item=Item::all();
        return view('item.item',compact('item'));
    }
    public function create(){
        return view('item.createItem');
    }
    public function store(Request $request){
        // dd($request->all());
        $item=new Item();
        $item->item_name=$request->item_name;
        $item->quantity=$request->quantity;
        $item->unit_price=$request->unit_price;
        $item->save();
        $notification=array(
            'messege'=>'Item Added Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.item')->with($notification);
    }
    public function edit($id){
        $item=Item::find($id);
        // dd($item);
        return view('item.editItem',compact('item'));

    }
    public function update(Request $request){
        $id=$request->id;
        $item=Item::find($id);
        $item->item_name=$request->item_name;
        $item->quantity=$request->quantity;
        $item->unit_price=$request->unit_price;
        $item->update();
        $notification=array(
            'messege'=>'Item Updated Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.item')->with($notification);
        
    }
    public function delete($id){
        $item=Item::find($id);
        $item->delete();
        $notification=array(
            'messege'=>'Item Deleted Successfully',
            'alert-type'=>'erroe'
        );
        return redirect()->route('all.item')->with($notification);

    }
}
