@extends('layouts.app') 
@section('title', $viewData["title"]) 
@section('subtitle', $viewData["subtitle"]) 
@section('content') 
<div class="container"> 
  <div class="row"> 
    <div class="col-lg-4 mx-auto"> 
      <p class="lead">Fish registered successfully!</p> 
    </div>
    <img src="https://spinning.fish/fish.gif" alt="fish">
    </div> 
  </div> 
</div> 
@endsection