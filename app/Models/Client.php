<?php

namespace App\Models;

use App\Mail\WelcomeMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'date_profiled',
        'primary_counsel_id',
        'date_of_birth',
        'profile_image',
        'case_details',
        'profile_image_notification'
    ];

    public static function boot()
    {
        parent::boot();

        return self::created(function ($client) {
            Mail::to($client->email)->send(new WelcomeMail($client));
        });
    }
}
