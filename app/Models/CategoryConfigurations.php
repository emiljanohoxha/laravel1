<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryConfigurations extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'key',
        'type',
        'value',
        'default',

    ];

    public function category_configuration_keys()
    {
        return $this->belongsTo(CategoryConfigurationKeys::class,'key','name');

    }
}
