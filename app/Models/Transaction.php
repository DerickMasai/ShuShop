<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $timestamps = TRUE;
    
    use HasFactory;

    protected $table = 'transactions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'transaction_code',
        'amount',
        'user_id',
        'name',
        'paid_using',
        'ref_no'
    ];
    protected $hidden = [
        'id',
        'update_at',
    ];
}
