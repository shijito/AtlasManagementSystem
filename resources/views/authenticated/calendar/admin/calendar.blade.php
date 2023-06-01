@extends('layouts.sidebar')

@section('content')
<div class="vh-100 pt-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-5 pb-5" style="border-radius:5px; background:#FFF; box-shadow:2px 2px 4px gray;">
    <div class="w-75 m-auto" >
      <p class="text-center" style="font-size:20px;">{{ $calendar->getTitle() }}</p>
      {!! $calendar->render() !!}
    </div>
  </div>
</div>
@endsection




<!-- <div class="vh-100 pt-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-5 pb-5" style="border-radius:5px; background:#FFF; box-shadow:2px 2px 4px gray;">
    <div class="w-75 m-auto border" style="border-radius:5px;"> -->