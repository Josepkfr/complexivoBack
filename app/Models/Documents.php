<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'template',
        'state',
        'order',
        'responsible_id',
    ];

    public function responsible()
    {
        return $this->belongsTo(Role::class, 'responsible_id');
    }
}
