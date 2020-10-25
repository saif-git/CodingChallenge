<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'branche', 'unbearbeitet', 'Gf_helt','Nicht_erreit','Wiedervolage',
        'Kein_interesse','Zu_viele_Versuche','Termine','Kunden','Black_List',
        'Insgesamt'
    ];


    
}
