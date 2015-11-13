<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class Tache extends Model
{

    protected $table = 'tache';
    protected $fillable = array('description','code','start_date','end_date','us_story_id','predecessors','state');


    public function developer(){
        return $this->belongsTo('App\Developer');
    }

    public function setState($state){
            $this->attributes['state'] = $state;
    }

    public function getState(){
        return $this->attributes['state'];
    }




}