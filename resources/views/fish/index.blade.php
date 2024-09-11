@extends('layouts.app') 
@section('title', $viewData["title"]) 
@section('subtitle', $viewData["subtitle"]) 
@section('content') 
<div class="container mt-5">
    <h1>List of Fishes</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Species</th>
                <th>Weight</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viewData["fishes"] as $fish)
                <tr>
                    <td>{{ $fish->getId() }}</td>
                    <td>
                        @if ($fish->getSpecies() == 'Big Head')
                            <strong>{{ $fish->getName() }}</strong>
                        @else
                            {{ $fish->getName() }}
                        @endif
                    </td>
                    <td>{{ $fish->getSpecies() }}</td>
                    <td>
                        @if ($fish->getSpecies() == 'Frog Dog')
                            <span class="text-blue">{{ $fish->getWeight() }}</span>
                        @else
                            {{ $fish->getWeight() }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection