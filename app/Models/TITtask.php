<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TITtask extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'priority',
        'status',
        'assigned_to',
        'deadline',
    ];

    protected $casts = [
        'deadline' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(TITcategory::class, 'category_id');
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
