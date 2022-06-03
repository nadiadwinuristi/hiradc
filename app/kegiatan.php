<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    protected $table = "kegiatan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','kegiatan'];

    public function register()
    {
        return $this->hasMany(register::class);
    }
}
