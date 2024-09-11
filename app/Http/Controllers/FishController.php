<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Fishes - PIXEL PLAZA';
        $viewData['subtitle'] = 'List of fishes';
        $viewData['fishes'] = Fish::all();

        return view('fish.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Create fish';

        return view('fish.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        $request->validate([
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'required|max:500',
            'game' => 'required',
            'client' => 'required',
        ]);

        Fish::create($request->only(['rating', 'comment', 'game', 'client']));

        return redirect()->route('fish.success');
    }

    public function success(): View
    {
        $viewData = [];
        $viewData['title'] = 'Fish created successfully';
        $viewData['subtitle'] = 'Fish created successfully';

        return view('fish.success')->with('viewData', $viewData);
    }

    public function destroy(string $id): RedirectResponse // according to RESTful conventions
    {
        try {
            Fish::findOrFail($id)->delete();
        } catch (\Exception $e) {
            return redirect()->route('fish.nonexistent');
        }

        return redirect()->route('fish.index');
    }
}
