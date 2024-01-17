<?php

namespace App\Models;

use App\Models\admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class phone extends Model
{
    use HasFactory;

    protected $table= "phones";

    protected $fillable =[

        "phone",
        "admin_id"
    ];

    public function admins()
    {
        return $this->belongsTo(admin::class,"id","admin_id");
    }
}
