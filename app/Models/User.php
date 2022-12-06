<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function categories()
    {
        return $this->hasMany(related: Category::class);
    }

    public function cities()
    {
        return $this->hasMany(related: City::class);
    }

    public function customers()
    {
        return $this->hasMany(related: Customer::class);
    }

    public function items()
    {
        return $this->hasMany(related: Item::class);
    }

    public function states()
    {
        return $this->hasMany(related: State::class);
    }

    public function stores()
    {
        return $this->hasMany(related: Store::class);
    }

    public function suppliers()
    {
        return $this->hasMany(related: Supplier::class);
    }

    public function abilities() : Collection
    {
        return $this->roles->flatMap->permissions->pluck('name', 'id')->unique();
    }
}
