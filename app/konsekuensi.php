<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class konsekuensi extends Model
{
    protected $table = "konsekuensi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','kategori_id','nilai','konsekuensi','financial','objective','legal','biaya','reputasi','cakupan','lama_pemulihan','lama_penyimpangan','product_image','dampak_sosial'];
    
    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}
