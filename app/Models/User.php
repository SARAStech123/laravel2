<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Mail;
use App\Mail\ContactMail;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = ['FName','LName','Class','Email','Password','roll','SName','SEmail','SPassword','roll2','approved', 'expiration_date'];

    // accessor to format the expiration_date when retrieving it
    public function getExpirationDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format('Y-m-d') : null;
    }

    public static function boot() {
  
        parent::boot();
    
        static::created(function ($item) {
          /*      var_dump($item);
            $userEmail = $item['Email'];
            Mail::to($userEmail)->send(new ContactMail($item));
            // Mail::to($user->email)->send(new LinkEmail($link));
        });*/
         if ($item->roll == 5) {
            $userEmail = $item->Email;
            Mail::to($userEmail)->send(new ContactMail($item));
        } elseif ($item->roll2 == 3) {
            $schoolEmail = $item->SEmail;
            Mail::to($schoolEmail)->send(new ContactMail($item));
        }
    });
    }


    // for school database

    //protected $table = 'schools';
    //protected $fillable = ['schoolname','schoolemail','schoolpassword'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
