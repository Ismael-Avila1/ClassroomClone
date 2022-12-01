<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Assert;
use PhpParser\Node\Expr\Assign;

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

    public function students()
    {
        return $this->belongsToMany(User::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}
