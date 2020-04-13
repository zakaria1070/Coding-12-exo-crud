@extends('layouts.admin')

@section('content')

@foreach ($portfolios as $portfolio)
<div>
     <p> titre: {{$portfolio->titre}} </p>
    <p> description : {{$portfolio->description}} </p>
   <p> image : {{$portfolio->image}} </p>
<a class="btn btn-danger" href="/portfolio/{{$portfolio->id}}/destroy">delete</a>
     <a class="btn btn-primary" href="/portfolio/{{$portfolio->id}}/edit">edit</a>
</div>
<div>
   
    <a class="btn btn-dark text-withe" href="/portfolio/create">create</a>
   

</div>
   
@endforeach

@endsection