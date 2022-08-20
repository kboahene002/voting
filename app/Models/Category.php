<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Contestant;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $dates = ['deleted_at'];

    public function contestant(){
        return $this->hasMany(Contestant::class);
    }
}
