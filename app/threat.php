<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class threat extends Model
{
    protected $table = "threat";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','istilah_id','nama'];

     public function istilah()
    {
        return $this->belongsTo(istilah::class);
    }
}

