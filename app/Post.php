<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;


class Post extends Model
{
    //
    use Rateable;
    // protected $fillable = [
    //     'name', 'jasa', 'tarif', 'tentang', 'web', 'email', 'foto',
    // ];
}
