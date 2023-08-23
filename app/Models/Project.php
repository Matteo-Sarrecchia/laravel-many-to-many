<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "project_leader_name",
        "people",
        "date_start",
        "duration",
        "description",
        'main_picture',

        'type_id'
        ];

        public function type(){
            return $this -> belongsTo(Type :: class);
        }

        public function technologies() {

            return $this -> belongsToMany(Technologie :: class);
        }
}
