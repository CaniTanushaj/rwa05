<?php

namespace App\Http\Controllers;
use App\Models\Auti;
use Illuminate\Http\Request;
use App\Models\Kategorija;
use App\Models\Rezervacija;

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
            })->paginate(6);
            $categories=Kategorija::all();
        }
        else{
            $products = Auti::orderBy('created_at','DESC')->paginate(6);
        $categories=Kategorija::all();
        }  

        if(request()->sort=='low_high'){
            if(request()->category){
                $products=Auti::with('kategorijas')->orderBy('Cijena','ASC')->whereHas('kategorijas', function($query){
                    $query->where('Tip',request()->category);
                })->paginate(6);
            }
            else {$products = Auti::orderBy('Cijena','ASC')->paginate(6);}
            
        }
        elseif(request()->sort=='high_low'){
            if(request()->category){
                $products=Auti::with('kategorijas')->orderBy('Cijena','DESC')->whereHas('kategorijas', function($query){
                    $query->where('Tip',request()->category);
                })->paginate(6);
            }
            else {$products = Auti::orderBy('Cijena','DESC')->paginate(6);}
            
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
    public function narudzba($slug)
    {
        $product=Auti::where('slug',$slug)->firstOrFail();
        return view('narudzba')->with([
            
            'product'=>$product,
    
    
    ]);
    }

    public function insert(Request $request){

        $request->validate([
            'ime_kartice' => 'required',
            'email_kartice' => 'required',
            'broj_kartice' => 'required',
            'exp_kartice' => 'required',
            'pin_kartice' => 'required',
        ]);

        $rezervacija= new Rezervacija();
        $rezervacija->user_id=$request->input("user_id");
        $rezervacija->ime_kartice=$request->input("ime_kartice");
        $rezervacija->marka_r=$request->input("marka_r");
        $rezervacija->model_r=$request->input("model_r");
        $rezervacija->email_kartice=$request->input("email_kartice");
        $rezervacija->broj_kartice=$request->input("broj_kartice");
        $rezervacija->exp_kartice=$request->input("exp_kartice");
        $rezervacija->pin_kartice=$request->input("pin_kartice");
        $rezervacija->save();

        return redirect('/hvala');
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
