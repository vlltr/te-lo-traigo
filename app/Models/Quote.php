<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Quote extends Model
{
    use HasFactory, HasUlids;


    protected $fillable = [
        'name',
        'email',
        'weight',
        'product_type_id',
        'value',
        'data',
    ];

    protected $casts = [
        'data' => 'array',
    ];

    public function product_type()
    {
        return $this->belongsTo(ProductType::class);
    }
}
