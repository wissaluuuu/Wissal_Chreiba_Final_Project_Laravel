<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'user_id',
        'due_date',
    ];

    public function tache()
{
    return $this->hasMany(Tache::class);
}
public function members()
{
    return $this->belongsToMany(User::class, 'team_memberships')->withPivot('role');
}
    public function users()
    {
        return $this->hasMany(User::class); 
    }


    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }
}
