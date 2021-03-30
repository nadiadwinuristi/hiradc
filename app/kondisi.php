<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kondisi extends Model
{
    protected $table = "kondisi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','kategori_id','kondisi'];
    
    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}
