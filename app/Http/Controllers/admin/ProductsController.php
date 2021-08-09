<?php

namespace App\Http\Controllers\admin;

use App\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function index()
    {
        if ( !in_array('PUPV', explode(".", auth()->user()->permissions)) )
            return redirect()->route('admin')->with('flasherror', 'Permissions denied to perform this operation, contact the administrator.');

        $products = Product::all();
    	return view('admin.products.index', compact('products'));
    }

    public function store(Request $request)
    {
        //	return $request ;
        $this->validate($request, ['sku' => 'required|unique:products,sku']);

//        $product = Product::create([
//            'compania' => $request->get('compania'),
//            'url' => Str::slug($request->get('compania')),
//            'tipo_pago' => '0',
//            'tipo_pago_tele' => '0',
//        ]);

        return redirect()->route('admin.products.edit', $product);
    }

//    public function show(User $user)
//    {
//        //$foto = $user->photos;
//        if ( !in_array('PUV', explode(".", auth()->user()->permissions)) )
//            return redirect()->route('admin')->with('flasherror', 'Permissions denied to perform this operation, contact the administrator.');
//
//        return view('admin.users.show', compact('user'));
//    }
//
//    public function edit(User $user)
//    {
//        //return auth()->user()->permissions;
//        if ( !in_array('PUE', explode(".", auth()->user()->permissions)) )
//            return redirect()->route('admin')->with('flasherror', 'Permissions denied to perform this operation, contact the administrator.');
//
//        $roles = Role::all();
//        return view('admin.users.edit', compact('user', 'roles'));
//    }
//
//    public function update(Request $request, User $user)
//    {
//        $rules = [
//            'name' => 'required',
//            'email' => ['required', Rule::unique('users')->ignore($user->id)],
//            'phone' => 'required|numeric',
//            'role' => 'required',
//        ];
//
//        if ( $request->role != $user->role ) {
//            $rol = Role::find($request->role);
//            $user->permissions = $rol->permissions;
//        }else {
//            $user->permissions = updaterights($request->permissions);
//            $user->save();
//        }
//
//        //Artisan::call('cache:clear');
//        if( $request->filled('password'))
//        {
//            $rules['password'] = ['confirmed', 'min:5'];
//        }
//        //return $request;
//        if( $request->hasFile('avatar') )
//		 {
//			if ( $user->avatar != '' && $user->avatar != 'unnamed.jpg'){
//				unlink(public_path().'/images/'.$user->avatar);
//			}
//			$file = $request->file('avatar');
//
//			$nombrearchivo  = time().'-'.$file->getClientOriginalName();
//            $file->move(public_path().'/images/avatar', $nombrearchivo);
//            $user->avatar = 'avatar/'.$nombrearchivo;
//            $user->save();
//		 }
//        $data = $request->validate($rules);
//
//        $user->update($data) ;
//        $user->password = bcrypt($request->password);
//
//        generaRecords('User updated', 'User ' .$user->name. ', updated successfully, for '. auth()->user()->name .'.');
//        return back()->with('flash', 'User has been updated successfully.');
//    }
//
//    public function destroy(User $user)
//    {
//        $user->delete();
//        generaRecords('User removed', 'User has been successfully removed, for '. auth()->user()->name .'.');
//        return redirect()->route('admin.users.index')->with('flash', 'User has been successfully removed.');
//    }
}
