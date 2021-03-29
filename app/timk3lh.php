<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class timk3lh extends Model
{
    protected $table = "timk3lh";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','unit_kerja','koordinator','email_koordinator','ketua','email_ketua'];
}
