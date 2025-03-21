<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class Section extends Model
{
    abstract function type(): string;
}
