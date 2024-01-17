<?php

namespace App\Models;

use App\Models\phone;
use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class admin extends Model
{
    use HasFactory;

    protected $table="admins";

    protected $fillable=[
       "name",
       "email",
       "password",
       "address",
       "priv"
    ];

    public function phone()
    {
        return $this->hasMany(phone::class,"admin_id","id");
    }

    public function products()
    {
        return $this->belongsToMany(product::class,"carts");
    }
}
