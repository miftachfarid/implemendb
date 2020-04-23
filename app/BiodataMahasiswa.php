<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BiodataMahasiswa extends Model
{

    use SoftDeletes;

    // define nama table
    protected $table = "biodata_mahasiswa";

    // define fillable columns
    protected $fillable = [
        "name",
        "nim",
        "address",
        "foto"
    ];
}
