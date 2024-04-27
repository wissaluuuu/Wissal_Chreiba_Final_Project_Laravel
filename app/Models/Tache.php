<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'user_id',
        'name',
        'description',
        // "status",
        'priority' ,
        "dateStart",
        "dateEnd",
        'project_id'
        
    ];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }


    public function User()
    {
        return $this->belongsTo(User::class, 'assigned_user_id');
    }
}
