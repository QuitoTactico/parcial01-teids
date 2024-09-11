@extends('layouts.app') 
@section('title', 'Home Page - FISH PLAZA') 
@section('content') 
<div class="text-center"> 
  <div class="btn-group mt-3" role="group" aria-label="Fish Management">
    <a href="{{ route('fish.register') }}" class="btn btn-primary">Register Fish</a>
    <a href="{{ route('fish.index') }}" class="btn btn-secondary">List Fish</a>
    <a href="{{ route('fish.stats') }}" class="btn btn-info">Fish Statistics</a>
  </div>
</div> 
@endsection