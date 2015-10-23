<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStory extends Model {

    protected $table = 'userstory';

    protected $fillable = [
        'description',
        'priority',
        'difficulty',
        'status',
        'project_id'
    ];
}