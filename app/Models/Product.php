<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'name', 
        'description',
        'price',
        'image',
        'user_id',
    ];

<<<<<<< HEAD

   
=======
    public function shops(): BelongsToMany
    {
        return $this->belongsToMany(Shop::class);
    }

    public function user():BelongsTo{

        return $this->belongsTo(User::class);

    }
>>>>>>> dbd703c831bb11c87651f1bbea934e9930b8aea9
}
