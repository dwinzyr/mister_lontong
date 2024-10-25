<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class admins extends Authenticatable
{
    protected $table = 'admin'; // Mengarahkan ke tabel admins

    protected $fillable = [
        'username', 'password', // Sesuaikan dengan kolom yang ada di tabel admins
    ];

    protected $hidden = [
        'password',
    ];

    public function getAuthIdentifierName()
{
    return 'username';  // Menggunakan username alih-alih email
}
}