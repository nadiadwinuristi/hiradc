<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class istilah extends Model
{
    protected $table = "istilah";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','kode','istilah'];
        
     public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}
