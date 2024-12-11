<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
       public function store(Request $request,Feature $feature)
    {
        $validateComment=$request->validate([
            'comment'=>'string|required',
        ]);
        $validateComment['user_id']=Auth::id();
        $validateComment['feature_id']=$feature->id;
         Comment::updateOrCreate($validateComment);
         return back();

    }

    /**
     * Display the specified resource.
     */
    public function destroy(Feature $feature)
    {
        $feature->comment()->where('user_id',Auth::id())->delete();
        return back();
    }
}
