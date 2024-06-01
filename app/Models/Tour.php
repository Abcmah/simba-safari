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
    public function landscape(){
        return $this->belongsTo(Landscape::class);
    }

    public function activity_level(){
        return $this->belongsTo(ActivityLevel::class);
    }
    public function scopeFilter($query, array $filters)
    {
//        dd($filters);
        if ($filters['region'] ?? false) {
            $query->whereHas('region', function ($q) use ($filters) {
                $q->where('region', 'like', '%' . $filters['region'] . '%');
            });
        }


        if ($filters['activity'] ?? false) {
            $query->whereHas('activity_type', function ($q) use ($filters) {
                $q->where('name', 'like', '%' . $filters['activity'] . '%');
            });
        }
        if ($filters['landscape'] ?? false) {
            $query->whereHas('landscape', function ($q) use ($filters) {
                $q->where('name', 'like', '%' . $filters['landscape'] . '%');
            });
        }
        if($filters['level'] ?? false){
            $query->whereHas('activity_level', function ($q) use ($filters){
               $q->where('level','like', '%' . $filters['level'] . '%');
            });
        }

        if ($filters['price_range'] ?? false) {

            $priceRange = explode('-', $filters['price_range']);
            if (count($priceRange) == 2) {
                $minPrice = intval(str_replace('$', '', $priceRange[0]));
                $maxPrice = intval(str_replace('$', '', $priceRange[1]));
                $query->whereBetween('badget_from', [$minPrice, $maxPrice]);
            }
        }


//        if ($filters['departing'] ?? false) {
//            $query->whereDate('departing', $filters['departing']);
//        }
//
//
//        if ($filters['returning'] ?? false) {
//            $query->whereDate('returning', $filters['returning']);
//        }


//        if ($filters['search'] ?? false) {
//            $query->where('place', 'like', '%' . $filters['search'] . '%')
//                ->orWhere('story', 'like', '%' . $filters['search'] . '%');
//        }

        return $query;
    }

}
