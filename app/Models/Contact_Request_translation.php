<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact_Request_translation extends Model
{
    protected $table = 'contact_request__translations';

    public $timestamps = false;
    protected $fillable = ['contact_subject', 'contact_message'];
    //
}
