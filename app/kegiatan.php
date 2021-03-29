<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    protected $table = "kegiatan";
    protected $primaryKey = "id";
    protected $fillable = [
        'kegiatan'];
}
