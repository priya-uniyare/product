<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Product;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function mylogin()
    {
        return view('login');
    }
    public function main()
    {
        return view('product');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required'
        ]);



        // Save data to database

        $form = new Form();
        $form->name = $request->input('name');
        $form->email = $request->input('email');
        $form->password = bcrypt($request->input('password'));
        $form->save();
                return redirect('/mylogin')->with('success', 'Register successful!!!');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
       
        $user = DB::table('forms')->where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('user', $user);
            return redirect('/page')->with('success', 'Login successful!');
        }
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
    public function upload(Request $request)
    {
       
        $product =new product; 
        $product->productname=$request->productname;
        $product->productprice=$request->productprice;
        $product->productquantity=$request->productquantity;
              
        if ($request->hasFile('productimage') && $request->file('productimage')->isValid()) {
            $image = $request->file('productimage');
            $imagename = time() . '.' . $image->extension();
            $image->move(public_path('layouts'), $imagename); 
            $product->productimage = $imagename;
            $product->save();
         return    redirect('/view')->with('success', 'Image uploaded successfully!');
        } else {
            return back()->withErrors('No valid file uploaded.');
        }
      

         return redirect('/view')->with('success', 'product added');

    }

    public function view()
    {
        $data=product::all();
        return view('display',compact('data'));
    }
    public function delete($id)
    {
     $data=product::find($id);
     $data->delete();
     return redirect()->back();
    }

    public function search(Request $request)
    {
      $search=$request->search;
      $data =product::where('productname','Like','%'.$search."%")->orWhere('productprice','Like','%'.$search."%")->get();
      return view('display',compact('data'));
    }
    public function update_view($id)
    {
        $product=product::find($id);
        return view('update_page',compact('product'));

    }
    public function update(Request $request , $id)
    {
        $product=product::find($id);
        $product->productname=$request->productname;
        $product->productprice=$request->productprice;
        $product->productquantity=$request->productquantity;
        $image=$request->file;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('layouts',$imagename);
            $product->productimage=$imagename;
        }
        
        $product->save();
        return redirect()->back();
    }

    public function getproduct(Request $request)
    {
        $category=$request->input('category');
        $validCategories=['electronic','furniture','home','cloths','footware'];
        if(!in_array($category,$validCategories))
        {
            return response()->json(['error'=>'Invalid category'],400);
        }
        $product=product::where('category',$category)->get();
        return response()->json(['product'=>$product]);

    }


}
