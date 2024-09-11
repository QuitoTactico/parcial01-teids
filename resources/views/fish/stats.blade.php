@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container mt-5">
    <h1>Fish Statistics</h1>
    <ul>
        <li>Frog Dog count: {{ $viewData['frogDogCount'] }}</li>
        <li>Big Head count: {{ $viewData['bigHeadCount'] }}</li>
        <li>Maximum weight: {{ $viewData['maxWeight'] }} kg</li>
    </ul>
</div>
@endsection