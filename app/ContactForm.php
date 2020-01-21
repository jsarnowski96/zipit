<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $fillable = ['name', 'email', 'subject', 'message', 'status'];
    public $table = 'contact_form_messages';
    public $data = ['name', 'email', 'subject', 'message', 'status'];
}
