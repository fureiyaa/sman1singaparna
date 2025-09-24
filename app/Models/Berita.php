<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $guarded = [];
        public function user()
    {
        return $this->hasOne(User::class, 'id_user');
    }
}
