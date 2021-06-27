<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Blogpost extends Model
{
    protected $fillable = ['user_id','name', 'img', 'slug', 'description'];

    public function user(){
        return $this->belongsTo(User::class);
        }
    }
