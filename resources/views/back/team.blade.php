@extends('layouts.admin')

@section('content')

@foreach ($teams as $team)
<div>
     <p> description: {{$team->nom}} </p>
    <p> titre2 : {{$team->description}} </p>
   <p> description2 : {{$team->image}} </p>
<a class="btn btn-danger" href="/team/{{$team->id}}/destroy">delete</a>
     <a class="btn btn-primary" href="/team/{{$team->id}}/edit">edit</a>
</div>
<div>
   
    <a class="btn btn-dark text-withe" href="/team/create">create</a>
   

</div>
   
@endforeach

@endsection