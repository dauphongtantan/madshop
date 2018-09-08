@extends('layouts.home')
@section('title','Order Success')
@section('main')
	 <div class="jumbotron" >
     <div class="container">
      <h1 style="margin-left: 200px;">Đăng ký thành công!!</h1>
      <br/>
       <p style="margin-left: 400px;">
           <a href="{{route('product')}}" class="btn btn-sm btn-info" >Shopping</a>
          <a href="{{route('home')}}" class="btn btn-sm btn-success">Home</a>
       </p>
     </div>
   </div>
@stop()
