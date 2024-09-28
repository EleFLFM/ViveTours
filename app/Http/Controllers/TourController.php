<?php
namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('tours.index', compact('tours'));
    }

    public function create()
    {
        return view('tours.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'tour_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $tour = new Tour();
        $tour->name = $request->name;
        $tour->description = $request->description;
        $tour->tour_date = $request->tour_date;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('tour_images', 'public');
            $tour->image = $imagePath;
        }

        $tour->save();

        return redirect()->route('tours.index')->with('success', 'Tour creado exitosamente.');
    }

    public function show(Tour $tour)
    {
        return view('tours.show', compact('tour'));
    }

    public function edit(Tour $tour)
    {
        return view('tours.edit', compact('tour'));
    }

    public function update(Request $request, Tour $tour)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'tour_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $tour->name = $request->name;
        $tour->description = $request->description;
        $tour->tour_date = $request->tour_date;

        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si existe
            if ($tour->image) {
                Storage::disk('public')->delete($tour->image);
            }
            $imagePath = $request->file('image')->store('tour_images', 'public');
            $tour->image = $imagePath;
        }

        $tour->save();

        return redirect()->route('tours.index')->with('success', 'Tour actualizado exitosamente.');
    }

    public function destroy(Tour $tour)
    {
        if ($tour->image) {
            Storage::disk('public')->delete($tour->image);
        }
        $tour->delete();
        return redirect()->route('tours.index')->with('success', 'Tour eliminado exitosamente.');
    }
}
