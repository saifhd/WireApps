@extends('layouts.layout')

@section('content')
<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Edit Item</h5>
        
    </div>
</div>
<br>
<form action="{{route('item.update')}}" method="get">
@csrf
    <input type="hidden" name="id" value="{{$item->id}}">
    <div class="form-layout">
        <div class="form-group">
            <label class="form-control-label">Item Name: </label>
            <input class="form-control" type="text" name="item_name" value="{{$item->item_name}}" required>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label class="form-control-label">Unit Price(Rs): </label>
                <input class="form-control" type="text" name="unit_price" value="{{$item->unit_price}}" required>
            </div>
            <div class="col-lg-6">
                <label class="form-control-label">Quantity: </label>
                <input class="form-control" type="text" name="quantity" value="{{$item->quantity}}" required>
            </div>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn-primary btn">Update Item</button>
        </div>
    </div>
</form>
@endsection