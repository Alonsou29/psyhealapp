<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DassResult extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'ansiedad', 'depresion', 'estres'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
