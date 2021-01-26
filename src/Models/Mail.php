<?php

namespace Devaissamail\Mail\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;
}
