<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $primarykey='cliente_id';
    protected $autoincrement=false;
    protected $keyType= 'string';

}
