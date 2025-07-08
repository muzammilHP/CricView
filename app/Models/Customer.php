<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Customer extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    protected $table= 'customers';
    protected $primarykey='id';
    public $incrementing=false;
    protected $keyType='string';
    protected $fillable = [
        'id',
        'username',
        'email',
        'contact',
        'password',
        'images'
    ];
}
