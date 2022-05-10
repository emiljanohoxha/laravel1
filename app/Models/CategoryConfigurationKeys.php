<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CategoryConfigurationKeys extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'name',
        'extra',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function category_configuration()
    {
        return $this->hasMany(CategoryConfigurations::class,'key','name');
    }

    // protected $primaryKey = 'name';
    // protected $keyType = 'string';
    // public $incrementing = false;
}
