<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function news(){
        return $this->hasMany(News::class,'user_id','id');
    }
    public function articles(){
        return $this->hasMany(Article::class,'user_id','id');
    }
    public function pengumumans(){
        return $this->hasMany(Pengumuman::class,'user_id','id');
    }
    public function agendas(){
        return $this->hasMany(Agenda::class,'user_id','id');
    }
    public function roles(){
        return $this->belongsToMany(Role::class, 'role_user_pivot')->withTimestamps();
    }
    public function images(){
        return $this->hasOne(Images::class, 'user_id','id');
    }

}
