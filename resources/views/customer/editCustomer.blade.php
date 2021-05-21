@extends('layouts.layout')

@section('content')
<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Edit Customers</h5>
        
    </div>
</div>
<br>
<form action="{{route('customer.update',$customer->id)}}" method="get">
@csrf
    
    <div class="form-layout">
        <div class="form-group">
            <label class="form-control-label">CustomerName: </label>
            <input class="form-control" type="text" name="name" value="{{$customer->name}}" required>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label class="form-control-label">Email: </label>
                <input class="form-control" type="email" name="email" value="{{$customer->email}}" required>
            </div>
            <div class="col-lg-6">
                <label class="form-control-label">Contact Number: </label>
                <input class="form-control" type="text" name="contact_no" value="{{$customer->contact_no}}"required>
            </div>
        </div>
        <div class="form-group">
            <label class="form-control-label">Address: </label>
            <input class="form-control" type="text" name="address" value="{{$customer->address}}" required>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn-primary btn">Save Deatails</button>
        </div>
    </div>
</form>

@endsection