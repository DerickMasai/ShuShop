<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = TRUE;
    
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = [
        'transaction_code',
        'transaction_ref_no',
        'item_id',
        'item_thumbnail',
        'item_title',
        'item_category',
        'item_price',
        'item_qnty',
        'customer_id',
        'customer_name',
        'customer_phone',
        'customer_address',
        'customer_zip_code',
        'customer_region',
        'customer_city',
        'customer_organization'
    ];
    protected $hidden = [
        'id',
        'update_at',
    ];
}
