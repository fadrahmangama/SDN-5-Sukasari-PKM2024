<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'title',
        'category_id',
        'user_id',
        'body',
        'excerpt',
        'slug',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter(Builder $query, array $filters){     //Membuat scopeFilter untuk fungsi search, gunakan Filter di controller

        $query->when($filters['search'] ?? false, function($query, $search){   //$search akan menjadi variabel yang menampung nilai dari $filters['search]
            return $query->where('title', 'like', '%' .$search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });
    }
}

