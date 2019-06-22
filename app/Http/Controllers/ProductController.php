<?php

namespace App\Http\Controllers;
use App\User;
use App\Product;
use App\Order;
Use DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Foundation\Http\FormRequest;
use App\Policies;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function __Construct()
     {
        $this->middleware('auth');
     }


    public function index(\App\Product  $Product )
    {

         $Product = DB::table('Products')->paginate(10);


    return view('products.Content' , compact('Product'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

            $data = request()->validate([

           'name'  => 'required',
           'image' => ['required' , 'image'],
          ]);




          $imagePath = request('image')->store('uploads' , 'public');

             $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200 ,1200);
             $image->save();



           auth()->User()->Product()->create([
             'name' => $data['name'],
             'image' => $imagePath,




           ]);



           return redirect('/Product/');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Product $Product)
    {






          return view('products.Show' , compact('Product'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product  $Product )
    {

        $this->authorize('update' , $Product );
        return view('products.edit' , compact('Product'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product   $Product)
    {


       $this->authorize('update' , $Product );









    $data = request()->validate([

        'name'  => 'required',
        'image' => '',

       ]);



  if (request('image'))

        {
            
        $imagePath = request('image')->store('uploads' , 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200 ,1200);
        $image->save();
    
        $imageArray =  ['image' =>  $imagePath];
    
    
    }






auth()->User()->Product()->update(array_merge(      
    $data ,
    $imageArray ?? [],
   
));







            return redirect('/Product');
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
