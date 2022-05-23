<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $appends = ['date'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsToMany(Category::class,'article_categories');
    }

    public function getDateAttribute(){
        $c = new Carbon($this->created_at);
        return $c->format('d M Y');
    }
}
