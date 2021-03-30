<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kemungkinan extends Model
{
    protected $table = "kemungkinan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama','nilai','keterangan'];

}
