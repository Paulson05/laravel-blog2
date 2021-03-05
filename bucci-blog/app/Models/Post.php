<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'body',
        'slug',
        'category_id',
        'name'



    ];
    public  function category(){
        return $this->belongsTo('App\Models\Category');
    }
    public  function tags(){
        return $this->belongsToMany(Tag::class,'post_tag','post_id','tag_id');
    }
    public  function comments(){
        return $this->hasMany('App\Models\Comment');
    }


}
