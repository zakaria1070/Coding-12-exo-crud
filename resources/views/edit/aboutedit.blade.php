@extends('layouts.admin')
@section('content')

<div class="container d-flex justify-content-center">
  <div class="col-5">
    <div class="container">
      <form method="post" action="/about/{{$abouts->id}}/update">
        @csrf

        <div class="form-group">
          <label class="mt-5">Titre Secondaire</label>
          <input type="text" value="{{$abouts->titre2}}" name="titre2" class="form-control" id="" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="mt-5">Description Secondaire</label>
          <input type="text" name='description2' value=" {{$abouts->description2}} " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="mt-5">ImageURL</label>
          <input type="text" name='img_about' value=" {{$abouts->img_about}} " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection
