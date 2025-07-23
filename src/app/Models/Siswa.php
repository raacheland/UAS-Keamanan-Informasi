<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
     protected static function boot(){
        parent::boot();

        static::creating(function ($client){
            if(empty($client->api_token)){
                $client->api_token = Str::random(5);
            }
        });
    }

    protected $table = 'siswa';

    protected $fillable = [
        'nis',
        'nama_siswa',
        'kelas_id',
        'api_token',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}
