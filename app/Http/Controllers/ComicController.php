<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Str;

class ComicController extends Controller
{

    protected $validationRules = [
        'title' => 'required|min:5|max:255',
        'description' => 'required|min:5',
        'thumb' => 'required|active_url',
        'price' => 'required|numeric',
        'series' => 'required|min:5|max:255',
        'sale-date' => 'required|date',
        'type' => 'required|min:1'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comic = new Comic();
        return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validatedData = $request->validate($this->validationRules);

        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale-date'];
        $newComic->type = $data['type'];
        $newComic->slug = Str::slug($data['title'], '-') . '-' . rand(); //Example slug, not 100% unique
        $newComic->save();

        return redirect()->route('comics.index')->with('new_entry', $newComic->title);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $comic = Comic::where('slug', $slug)->first();
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sentData = $request->all();

        $validatedData = $request->validate($this->validationRules);

        $comic = Comic::findOrFail($id);

        if($sentData['title'] != $comic['title']){
            $sentData['slug'] = Str::slug($sentData['title'], '-') . '-' . rand(); // Create new slug (example, not 100% unique) based on the new title, if different
        } else {
            $sentData['slug'] = $comic['slug'];
        }

        $comic->update($sentData);

        return redirect()->route('comics.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('delete', $comic->title);
    }
}
