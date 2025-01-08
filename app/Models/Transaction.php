<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Middleware\User;

class Transaction extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'afiliator_id',
        'product_name',
        'quantity',
        'total',
        'status',
        'revenue',
        'created_at',
        'updated_at',
    ];

    /**
     * Relation to the afiliator (user).
     */
    public function afiliator()
    {
        return $this->belongsTo(User::class, 'afiliator_id');
    }
}