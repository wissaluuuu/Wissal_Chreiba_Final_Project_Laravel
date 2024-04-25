<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        // 'espace_id', 
        // 'assigned_to',
        'created_by',
        // 'updated_by',
        // 'status',
        // 'priority',
        // 'deadline',
        // 'due_date',
        // 'image_path',
    ];

    public function espace()
    {
        return $this->belongsTo(Project::class);
    }
    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_user_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
