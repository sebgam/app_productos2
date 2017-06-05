<?php

namespace luna\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = \luna\product::paginate();
        return view('home', compact('products'));
    }

    public function destroyProduct(Request $request, $id){//-----eliminando con AJAX

       if($request->ajax()){
        $product = \luna\product::find($id);
        $product->delete();
        $products_total = \luna\product::all()->count();//-----cuanta los archivos que quedan luego de eliminar

        return response()->json([
                'total'=>$products_total,
                'message'=> $product->name . 'fue eliminado correctamente'

            ])
       } 
    }
}
