<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'website', 'address1', 'address2', 'note', 'postal_code', 'city_id', 'state_id'];

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
