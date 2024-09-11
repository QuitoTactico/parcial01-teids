@extends('layouts.app') 
@section("title", $viewData["title"]) 
@section('content') 
<div class="container"> 
    <div class="row justify-content-center"> 
        <div class="col-md-8"> 
        <div class="card"> 
            <div class="card-header">Register Fish</div> 
            <div class="card-body"> 
                @if($errors->any()) 
                <ul id="errors" class="alert alert-danger list-unstyled"> 
                @foreach($errors->all() as $error) 
                <li>{{ $error }}</li> 
                @endforeach 
                </ul> 
                @endif 
    
                <form method="POST" action="{{ route('fish.save') }}"> 
                    @csrf 
                    <input type="text" class="form-control mb-2" placeholder="Enter name" name="name" 
                    value="{{ old('name') }}" required />
                    <select class="form-control mb-2" name="species" required>
                        <option value="" disabled selected>Select species</option>
                        <option value="Frog Dog" {{ old('species') == 'Frog Dog' ? 'selected' : '' }}>Frog Dog</option>
                        <option value="Big Head" {{ old('species') == 'Big Head' ? 'selected' : '' }}>Big Head</option>
                    </select>
                    <input type="number" step="0.01" class="form-control mb-2" placeholder="Enter weight" name="weight" 
                    value="{{ old('weight') }}" required />
                    <input type="submit" class="btn btn-primary" value="Register" /> 
                </form> 
            </div> 
            </div> 
        </div> 
        </div> 
    </div> 
</div> 
@endsection