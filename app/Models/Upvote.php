<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upvote extends Model
{
    use HasFactory;
    protected $fillable=['user_id','feature_id','upvote'];

    public function feature()
    {

    return $this->belongsTo(Feature::class);
    }
}
