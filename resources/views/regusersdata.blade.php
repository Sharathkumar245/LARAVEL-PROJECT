@extends('navbarsbootsdtrap')
@section('content')
<html>
<head>
<style>  
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
</style>       
<body>     
<div>                    
<div class="conatiner">
<div class="col-md-12 m-auto">
<h1 class="bg-dark text-white text-center">CUSTOMER DETAILS</h1>              
<table class="table table-striped">                                              
<tr>                                                                                 
<td>user</td>
<td>email</td>
<td>password</td>
<td>Created at</td>
</tr>
@foreach($usda as $u)
<tr>
<td>{{ $u->user}}</td>
<td>{{$u->email}}</td>
<td>{{$u->password}}</td>
<td>{{$u->created_at}}</td>
</tr>                                     
@endforeach                                                                                               
</table>                       
</div>     
</div>
</div>
@endsection