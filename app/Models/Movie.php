<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','pic', 'email'];

    protected $appends = ['picUrl'];

    public function getPicUrlAttribute() {
        $url = $this->pic ? asset("images/product_pics/" . $this->pic) : "https://512pixels.net/downloads/macos-wallpapers-thumbs/10-14-Night-Thumb.jpg";
        return $url;
    }
}
