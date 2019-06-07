<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotgameAccount extends Model
{
    protected $fillable = [
        'game_id', 'username', 'password',
    ];

    public function api(){
        return $this->belongsTo('App\Models\ApSite', 'game_id');
    }
}