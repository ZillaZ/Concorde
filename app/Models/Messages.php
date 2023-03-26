<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Messages extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'chat_id',
        'user_id',
        'message'
    ];
}
