<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Answer;
use App\Models\Test;

class Question extends Model
{
    // use HasFactory;

    protected $fillable = ['description'];

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function answers_right() {
        return $this->belongsToMany(Answer::class);
    }

    public function test() {
        return $this->belongsTo(Test::class);
    }
}
