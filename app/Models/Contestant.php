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

    protected $fillable = [
        'contestant_name',
        'category_id',
        'contestant_description',
        'contestant_image'
    ];


    public function category(){
        return $this->belongsTo(Contestant::class );
    }


}
