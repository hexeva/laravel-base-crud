<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $data = [
            'comics'=> $comics,
        ];

        return view('comics.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $request->validate([
            'title'=>'required|max:50',
            'description'=>'min:30|max:60000|required',
            'thumb'=>'required',
            'price'=>'required|between:001.00,999.99',
            'series'=>'required|max:80',
            'sale_date'=>'required',
            'type'=>'required|max:20'
        ]);

        $new_comic = new Comic();
        $new_comic->title = $form_data['title'];
        $new_comic->thumb = $form_data['thumb'];
        $new_comic->price = $form_data['price'];
        $new_comic->series = $form_data['series'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->type = $form_data['type'];
        $new_comic->description = $form_data['description'];
        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        $data = [
            'comic'=>$comic,
        ];
        return view('comics.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic_to_edit= Comic::findOrFail($id);

        $data = [
            'comic'=>$comic_to_edit,
        ];

        return view('comics.edit',$data);
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
       $form_data = $request->all();

       $comic_to_update = Comic::findOrFail($id);
       $comic_to_update->update($form_data);
       return redirect()->route('comics.show',['comic'=>$comic_to_update->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
