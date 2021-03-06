<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class EventPhotos extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['event_id','photo','type'];

    public function Events(){
        return $this->belongsTo('App\Models\Event');
    }
}
