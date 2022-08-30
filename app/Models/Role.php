<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";
    use HasFactory;

    /**
     * Get the role that owns the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
}
