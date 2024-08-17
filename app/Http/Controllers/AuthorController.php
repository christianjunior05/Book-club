<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $author = Author::with('books')->get();
        return view('author.index', compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name_author' => 'required|string|max:255',
        ]);

        // Création de l'auteur
        $author = Author::create([
            'name_author' => $request->input('name_author'),
        ]);
        return redirect()->route('author.create')->with('success', 'Auteur ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */

        public function edit($id)
        {
            $author = Author::findOrFail($id);
            return view('authors.edit', compact('author'));
        }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
