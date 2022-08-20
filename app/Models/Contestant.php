<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category ;

class Contestant extends Model
{
    use HasFactory;use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'contestants';


    public function category(){
        return $this->belongsTo(Contestant::class );
    }


}
