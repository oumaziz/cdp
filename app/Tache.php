<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{


    protected $table = 'tache';
    protected $fillable = array('description','code','start_date','end_date','us_story_id','predecessors');






}