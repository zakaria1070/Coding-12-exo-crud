@extends('layouts.admin')

@section('content')

@foreach ($subscribes as $subscribe)
<div>
     <p> titre: {{$subscribe->titre}} </p>
    <p> description : {{$subscribe->description}} </p>
<a class="btn btn-danger" href="/subscribe/{{$subscribe->id}}/destroy">delete</a>
     <a class="btn btn-primary" href="/subscribe/{{$subscribe->id}}/edit">edit</a>
</div>
<div>
   
    <a class="btn btn-dark text-withe" href="/subscribe/create">create</a>
   

</div>
   
@endforeach

@endsection