<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class threat extends Model
{
    protected $table = "threat";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama'];
}
