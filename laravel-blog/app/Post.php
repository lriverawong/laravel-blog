<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name
    protected $table = 'posts';

    // Primary key field
    public $primaryKey = 'id';

    // timestamps for records
    public $timestamps = true;

    // setting up relationships
    public function user() {
        return $this->belongsTo('App\User');
    }
    
}
