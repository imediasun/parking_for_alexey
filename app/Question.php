<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Answer;
class Question extends Model
{
    //
    public $items;
    public function answer(){
        
        return $this->hasOne('App\Answer','id_question');
    }



}
