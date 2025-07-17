<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TITcategory extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name'];

    public function tasks(): HasMany
    {
        return $this->hasMany(TITtask::class, 'category_id');
    }
}
