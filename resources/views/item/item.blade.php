@extends('layouts.layout')

@section('content')
<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>All Item</h5>
        
    </div>
</div>
<br>
<div class="table-wrapper">
  <table  class="table display responsive nowrap">
    <thead>
      <tr>
        <th class="wd-15p">ID</th>
        <th class="wd-15p">Item Name</th>
        <th class="wd-15p">Quantity</th>
        <th class="wd-15p">Unit Price</th>
        <?php
          
          $user_id=Auth::user()->id;
          $user_det=App\User::find($user_id);
          if($user_det->cashier==1){
        ?>
        <th class="wd-20p">Action</th>
        <?php
          }
        ?>
        
      </tr>
    </thead>
    <tbody>
      @foreach($item as $row)
      <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->item_name}}</td>
        <td>{{$row->quantity}}</td>
        <td>{{$row->unit_price}}</td>
        <?php
          
          $user_id=Auth::user()->id;
          $user_det=App\User::find($user_id);
          if($user_det->cashier==1){
        ?>
        <td><a href="{{route('item.edit',$row->id)}}" class="btn btn-sm btn-info">Edit</a>
        <a href="{{route('item.delete',$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
        
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