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

        $query->when($filters['search'] ?? false, function($query, $search) { //$search akan menjadi variabel yang menampung nilai dari $filters['search]
            return $query->where(function($query) use ($search) {
                 $query->where('title', 'like', '%' . $search . '%')
                             ->orWhere('body', 'like', '%' . $search . '%');
             });
         });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category) { // 'category' dalam whereHas, menunjukkan kepada relasi eloquent, sementara use ($category) digunakan untuk mengkakses $category dari scope luar
                $query->where('slug', $category); //slug di sini memeriksa apakah relasi category memiliki kolom slug yang sesuai dengan nilai $category
            });
        });

        $query->when($filters['author'] ?? false, function($query, $author){
            return $query->whereHas('user', function($query) use ($author){ //'user' diambil dari nama relasinya
                $query->where('username', $author); //username adalah yang query yang dilakukan di dalam routingnya. Dicek dari variabel $author
            });
        });
    }
}


