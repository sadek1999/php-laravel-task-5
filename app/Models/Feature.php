<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
   use HasFactory;
   protected $fillable=['name','description','user_id'];

   public function comment()
   {

   return $this->hasMany(Comment::class);
   }
   public function upvote()
   {

   return $this->hasMany(Upvote::class);
   }
   public function author()
   {

   return $this->belongsTo(User::class) ;
   }
}
