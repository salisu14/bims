<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'cost', 'barcode', 'is_finished', 'manufactured_at', 'category_id'];

    /**
     * The attributes that should be cast.
     *
     * @var array
    */
    protected $casts = [
        'manufactured_at' => 'datetime', 
    ];

    public function category()
    {
        return $this->belongsTo(
            related: Category::class,
            foreignKey: 'category_id',
        );
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class, 'item_role','item_id', 'sale_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }
}
