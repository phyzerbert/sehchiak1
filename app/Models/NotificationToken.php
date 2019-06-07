<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotificationToken extends Model
{
    protected $table = 'notification_token';

    protected $fillable = [
        'token'
    ];
}
