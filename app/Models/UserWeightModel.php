<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWeightModel extends Model
{
    protected $table = "users_weight";

    protected $fillable = ["user_id", 'current_weight'];
}
