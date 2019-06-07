<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    protected $fillable = [
        'member_id', 'api_id', 'game_id','request', 'deposit_amount', 'withdraw_amount', 'type',
    ];

    public function member(){
        return $this->belongsTo('App\Models\Member');
    }

    public function api(){
        return $this->belongsTo('App\Models\ApSite', 'api_id');
    }
}
