<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApSite extends Model
{
    protected $table = "ap_site";

    protected $fillable = [
        'name', 'url', 'description', 'login_id', 'login_password',
    ];
}
