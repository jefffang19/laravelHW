<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    // set to false so that Model will not automatically create columns `updated_at`, `created_at`
    public $timestamps = false;
    //
}
