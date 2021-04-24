<?php

namespace App\Models;



class Trainer extends \Illuminate\Database\Eloquent\Model
{
    protected $table ='trainer';
    public function search($key) {
        return self::where('train_name','like','%'.$key.'%')->paginate(20);
    }
}
