@extends('layouts.layout')

@section('content')
<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Create Customers</h5>
        
    </div>
</div>
<br>
<form action="{{route('customer.store')}}" method="post">
@csrf
    <div class="form-layout">
        <div class="form-group">
            <label class="form-control-label">CustomerName: </label>
            <input class="form-control" type="text" name="name" placeholder="Enter Customer Name" required>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label class="form-control-label">Email: </label>
                <input class="form-control" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="col-lg-6">
                <label class="form-control-label">Contact Number: </label>
                <input class="form-control" type="text" name="contact_no" placeholder="Contact Number" required>
            </div>
        </div>
        <div class="form-group">
            <label class="form-control-label">Address: </label>
            <input class="form-control" type="text" name="address" placeholder="Enter Customer Address" required>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn-primary btn">Save Deatails</button>
        </div>
    </div>
</form>

@endsection