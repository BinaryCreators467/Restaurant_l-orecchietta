<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [

        'name', 
        'description',
        'city',
        'image',
        'user_id',
 
    ];

    public function user():BelongsTo{

        return $this->belongsTo(User::class);


    }

}
