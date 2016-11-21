<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fees';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['ID'];
}
