@extends('layouts.layout')

@section('content')
<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Create Item</h5>
        
    </div>
</div>

<form action="{{route('item.store')}}" method="post">
@csrf
    <div class="form-layout">
        <div class="form-group">
            <label class="form-control-label">Item Name: </label>
            <input class="form-control" type="text" name="item_name" placeholder="Enter Item Name" required>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label class="form-control-label">Unit Price(Rs): </label>
                <input class="form-control" type="text" name="unit_price" placeholder="Unit Price" required>
            </div>
            <div class="col-lg-6">
                <label class="form-control-label">Quantity: </label>
                <input class="form-control" type="text" name="quantity" placeholder="Available Quantity" required>
            </div>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn-primary btn">Save Item</button>
        </div>
    </div>
</form>

@endsection