<?php

namespace App\Http\Controllers;
use App\Models\Auti;
use Illuminate\Http\Request;
use App\Models\Kategorija;

class AutiKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(request()->category){
            $products=Auti::with('kategorijas')->whereHas('kategorijas', function($query){
                $query->where('Tip',request()->category);
            })->get();
            $categories=Kategorija::all();
        }
        else{
            $products = Auti::orderBy('created_at','DESC')->get();
        $categories=Kategorija::all();
        }  

        if(request()->sort=='low_high'){
            $products = $products->sortBy('Cijena');
        };
        if(request()->sort=='high_low'){
            $products = $products->sortByDesc('Cijena');
        }
        return view('welcome')->with([
            'products'=>$products,
            'categories'=>$categories,
        ]);
    
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product=Auti::where('slug',$slug)->firstOrFail();
        $mozdavamsesvidi=Auti::where('slug','!=',$slug)->inRandomOrder()->take(3)->get();
        return view('kartica')->with([
            
            'product'=>$product,
            'mozdavamsesvidi'=>$mozdavamsesvidi,
    
    
    ]);
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
    public function destroy($id)
    {
        //
    }
}
