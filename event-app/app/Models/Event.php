<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'venue',
        'start_date',
        'end_date',
        'user_id',
    ];

    //User Model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Invitation Model
    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }
}
