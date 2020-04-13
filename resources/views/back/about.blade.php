@extends('layouts.admin')

@section('content')

@foreach ($abouts as $about)
<div>
     <p> description: {{$about->description}} </p>
    <p> titre2 : {{$about->titre2}} </p>
   <p> description2 : {{$about->description2}} </p>
   <p> image: {{$about->img_about}} </p>
<a class="btn btn-danger" href="/about/{{$about->id}}/destroy">delete</a>
     <a class="btn btn-primary" href="/about/{{$about->id}}/edit">edit</a>
</div>
<div>
   
    <a class="btn btn-dark text-withe" href="/about/create">create</a>
   

</div>
   
@endforeach

@endsection