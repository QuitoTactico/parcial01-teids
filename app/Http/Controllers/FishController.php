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
        $viewData['title'] = 'Fishes - PIXEL PLAZA';
        $viewData['subtitle'] = 'List of fishes';
        $viewData['fishes'] = Fish::all();

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
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|in:Frog Dog,Big Head',
            'weight' => 'required|numeric|min:0',
        ]);

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
}
