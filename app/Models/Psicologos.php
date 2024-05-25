<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Psicologos extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function User(){
        return $this->BelongsTo('App\Models\User');
    }
}
