<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function region(){
        return $this->belongsTo(Region::class);
    }
    public function activity_type(){
        return $this->belongsTo(ActivityType::class);
    }
    public function scopeFilter($query, array $filters){
//        dd(explode(',',$filters['badget']));

            return $query->where('region','like', '%'.request('region').'%')
                ->orWhere('activity','like', '%'.request('activity').'%')
                ->orWhere('activity','like', '%'.request('activity').'%');
        if($filters['search'] ?? false){
            return $query->where('place','like', '%'.request('search').'%')->orWhere('story','like', '%'.request('search').'%');
        }
    }
}
