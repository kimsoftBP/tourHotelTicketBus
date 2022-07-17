<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
    //
    protected $table="hotel_room";
    protected $primaryKey="id";
    protected $fillable=[
        'id',
        'standard_people','maximum_people','name','text','piece','hotelid',
        'created_at','updated_at',
        ];
    public function hotel(){
        return $this->hasOne('App\Hotel','id','hotelid');
    }
}
