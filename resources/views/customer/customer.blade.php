@extends('layouts.layout')

@section('content')
<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>All Customers</h5>
        
    </div>
</div>
<br>
<div class="table-wrapper">
  <table  class="table display responsive nowrap">
    <thead>
      <tr>
        <th class="wd-15p">ID</th>
        <th class="wd-15p">Customer Name</th>
        <th class="wd-15p">Email</th>
        <th class="wd-15p">Contact Number</th>
        <th class="wd-15p">Address</th>
        
        <?php
          
          $user_id=Auth::user()->id;
          $user_det=App\User::find($user_id);
          if($user_det->manager==1){
        ?>
        <th class="wd-20p">Action</th>
        <?php
          }
        ?>
        
      </tr>
    </thead>
    <tbody>
      @foreach($customer as $row)
      <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->contact_no}}</td>
        <td>{{$row->address}}</td>
        <?php
          
          $user_id=Auth::user()->id;
          $user_det=App\User::find($user_id);
          if($user_det->manager==1){
        ?>
            <td><a href="{{route('customer.edit',$row->id)}}" class="btn btn-sm btn-info">Edit</a>
            <a href="{{route('customer.delete',$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
            
            </td>
        <?php
          }
        ?>
        
      </tr>
      @endforeach
      

      
      
      
    </tbody>
  </table>
</div>
@endsection