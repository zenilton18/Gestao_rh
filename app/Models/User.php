<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\user as Autheticable;

class User extends Autheticable
{
    public function detail()
    {
        return $this->HasOne(UserDetail::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
