@extends('layouts.admin')

@section('content')

@foreach ($services as $service)
<div>
     <p> titre: {{$service->titre}} </p>
    <p> description : {{$service->description}} </p>
   <p> logo : {{$service->logo}} </p>
<a class="btn btn-danger" href="/service/{{$service->id}}/destroy">delete</a>
     <a class="btn btn-primary" href="/service/{{$service->id}}/edit">edit</a>
</div>
<div>
   
    <a class="btn btn-dark text-withe" href="/service/create">create</a>
   

</div>
   
@endforeach

@endsection