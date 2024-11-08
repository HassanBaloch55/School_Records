<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students_records;
class ChildController extends Controller
    /**
     * Display a listing of the resource.
     */

    {
        public function index()
        {
            $children = Students_records::all();
            return view('children.index', compact('children'));
        }

        public function create()
        {
            return view('children.create');
        }

        public function store(Request $request)
        {
           // Validate incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'date_of_birth' => 'required|date',
        'grade' => 'required|string|max:5', // Adjust as needed
    ]);

    // Create a new record without the _token
    Students_records::create($request->except('_token'));

    return redirect()->route('children.index')->with('success', 'Child record created successfully.');
 }

        public function show(Students_records $child)
        {
            return view('children.show', compact('child'));
        }

        public function edit(Students_records $child)
        {
            return view('children.edit', compact('child'));
        }

        public function update(Request $request, Students_records $child)
        {
            $request->validate([
                'name' => 'required',
                'date_of_birth' => 'required|date',
                'grade' => 'required',
            ]);

            $child->update($request->all());
            return redirect()->route('children.index')->with('success', 'Child record updated successfully.');
        }

        public function destroy(Students_records $child)
        {
            $child->delete();
            return redirect()->route('children.index')->with('success', 'Child record deleted successfully.');
        }
    }


