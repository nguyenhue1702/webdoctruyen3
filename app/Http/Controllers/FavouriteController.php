<?php

namespace App\Http\Controllers;

use App\Models\favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

use function PHPSTORM_META\registerArgumentsSet;
use function Symfony\Component\String\b;

class FavouriteController extends Controller
{
    public function add_favourite(Request $request){
        $favourite = new favourite();
        $favourite->user_id = $request->user_id;
        $favourite->product_id = $request->product_id;
        $favourite->save();
        return redirect()->back();
    }
    public function remove_favourite($id){
      $favourite =favourite::find($id);
 
 $favourite->delete();
      return redirect()->back();

    }
}
