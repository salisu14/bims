<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /** 
     * Fields that are mass assignable
     * */ 
    protected $fillable = ['name', 'email', 'phone', 'note', 'address', 'city_id', 'state_id', 'postal_code'];

    public function city()
    {
        return $this->belongsTo(
            related: City::class,
            foreignKey: 'city_id',
        );
    }

    public function state()
    {
        return $this->belongsTo(
            related: State::class,
            foreignKey: 'state_id',
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }
}
