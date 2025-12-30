<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Contact_Request extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table = 'contact__requests';
    public $translatedAttributes = ['contact_subject', 'contact_message'];
    protected $fillable = [
        'contact_name',
        'contact_email',
//        'contact_subject',
//        'contact_message',
    ];

    //
}
