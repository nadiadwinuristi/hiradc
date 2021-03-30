<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = "kategori";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','kategori'];
    
    public function kondisi()
    {
        return $this->hasMany(kondisi::class);
    }

    public function istilah()
    {
        return $this->hasMany(istilah::class);
    }
}
