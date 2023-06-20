<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class UserAdmin extends Model
{
    use HasFactory;
    protected $table = "useradmins";
    protected $primaryKey = "kdadmin";
    protected $guarded = [];
    protected $keyType = "string";

}
