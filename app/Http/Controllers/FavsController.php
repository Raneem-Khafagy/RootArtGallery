<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\ArtPiece;

class FavsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $art_pieces = $request->user()->fav_art_pieces()->paginate();

        return view('pages/fav-items', compact('art_pieces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ArtPiece $art_piece)
    {
        // MODEIFY auth button on art-piece-mini view
        // if($request->user()) return redirect()->route('login');
        /////////////////////////////////////////////////

        // attach / add artpice to user - sync without detaching for not deleting pervs records
        $request->user()->fav_art_pieces()->syncWithoutDetaching($art_piece);

        return redirect()->back()->with(["message" => ' Added Succssfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ArtPiece $art_piece)
    {
        //

        $request->user()->fav_art_pieces()->detach($art_piece);

        return redirect()->back()->with(["message" => ' Removed Succssfully']);
    }
}
