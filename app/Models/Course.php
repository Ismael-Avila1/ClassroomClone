<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'section', 'room', 'invitation-code', 'user_id'
    ];

    public $timestamps = false;

    public function professor()
    {
        return $this->hasOne(User::class);
    }
}
