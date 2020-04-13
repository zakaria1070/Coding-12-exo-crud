@extends('layouts.admin')

@section('content')

@foreach ($testimonials as $testimonial)
<div>
     <p> titre: {{$testimonial->titre}} </p>
    <p> description : {{$testimonial->description}} </p>
   <p> logo : {{$testimonial->image}} </p>
<a class="btn btn-danger" href="/testimonial/{{$testimonial->id}}/destroy">delete</a>
     <a class="btn btn-primary" href="/testimonial/{{$testimonial->id}}/edit">edit</a>
</div>
<div>
   
    <a class="btn btn-dark text-withe" href="/testimonial/create">create</a>
   

</div>
   
@endforeach

@endsection