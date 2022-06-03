<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $table = "register";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','unit_kerja','kegiatan_id','lokasi','kondisi_id','threat_id','pengendalian','kemungkinan_id','konsekuensi_id','tingkat_resiko','status regulasi','aspek_lingkungan','peluang','resiko','resiko_ditoleransi','cakupan_resiko','status_program','program'];

     public function kegiatan()
    {
        return $this->belongsTo(kegiatan::class);
    }
    public function kondisi()
    {
        return $this->belongsTo(kondisi::class);
    }
    public function threat()
    {
        return $this->belongsTo(threat::class);
    }
    public function kemungkinan()
    {
        return $this->belongsTo(kemungkinan::class);
    }
    public function konsekuensi()
    {
        return $this->belongsTo(konsekuensi::class);
    }

}
