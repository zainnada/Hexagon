<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    protected $table = 'services';
    public $translatedAttributes = [
        'service_name',
        'service_description'
    ];
    protected $fillable = [
        'service_price',
    ];

}
