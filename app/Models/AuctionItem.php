<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionItem extends Model
{
    use HasFactory;

    protected $table = 'auction_items';

    protected $fillable = [
        'name',
        'description',
        'minimum_offer',
        'minimum_increments',
        'start_dt',
        'end_dt',
        'active',  
    ];

    protected $casts= [
        'active' => 'boolean',
    ];

    public function getCurrentBidIdAttribute() {
        return null;
    }
}
