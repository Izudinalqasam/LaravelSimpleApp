<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $table = 'posts';

    // you can use this way to change the key of the model binding 
    // or you can use model:column_key in the route funtion (route model binding)
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // allow property which can be filled by user, if you using eloquent model to save data to database (not manual way)
    // you need to register the property to fillable
    protected $fillable = [
        'title', 'slug', 'body'
    ];

    // or you can specify guarded which the property not register in guarded will be open
    // usually developer using this below technique when the developer himself submit form to save data to database
    // if the form is used generally or can be accessed by the other user, don't use this technique
    // protected $guarded = [];


    // add scope prefix to be shown in the tinker
    public function scopeLatestFirst() 
    {
        return $this->latest()->first();
    }

    public function scopeLatestPost()
    {
        return $this->latest()->get();
    }
}