<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    public $table = 'contact_form_messages';
    public $data = ['name', 'email', 'subject', 'message', 'status']
}
