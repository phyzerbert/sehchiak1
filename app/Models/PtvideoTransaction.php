<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PtvideoTransaction extends Model
{
    protected $fillable = [
        'member_id', 'game_id','request', 'deposit_amount', 'withdraw_amount', 'serial_number', 'type',
    ];

    public function member(){
        return $this->belongsTo('App\Models\Member');
    }

}
