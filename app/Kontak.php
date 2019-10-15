<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    // use SoftDeletes;
    protected $fillable =['nama','telepon', 'email', 'alamat'];
}
