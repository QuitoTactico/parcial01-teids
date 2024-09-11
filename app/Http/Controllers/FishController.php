<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FishController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Fishes - FISH PLAZA';
        $viewData['subtitle'] = 'List of fishes';
        $viewData['fishes'] = Fish::orderBy('weight', 'asc')->get();

        return view('fish.index')->with('viewData', $viewData);
    }

    public function register(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Register fish';

        return view('fish.register')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        Fish::validateFishData($request->all());

        Fish::create($request->only(['name', 'species', 'weight']));

        return redirect()->route('fish.success');
    }

    public function success(): View
    {
        $viewData = [];
        $viewData['title'] = 'Fish registered successfully';
        $viewData['subtitle'] = 'Fish registered successfully';

        return view('fish.success')->with('viewData', $viewData);
    }

    public function stats(): View
    {
        $viewData = [];
        $viewData['title'] = 'Fish Statistics';
        $viewData['subtitle'] = 'Statistics of registered fishes';

        $viewData['frogDogCount'] = Fish::where('species', 'Frog Dog')->count();
        $viewData['bigHeadCount'] = Fish::where('species', 'Big Head')->count();

        $viewData['maxWeight'] = Fish::max('weight');

        return view('fish.stats')->with('viewData', $viewData);
    }
}
