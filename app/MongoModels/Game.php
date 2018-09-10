<?php

namespace App\MongoModels;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Game extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Games';
}
