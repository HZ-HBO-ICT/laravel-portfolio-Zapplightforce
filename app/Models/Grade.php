<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    public function addResult($new_grade){
        if ($this->best_grade < $new_grade){
            $this->best_grade = $new_grade;

            if ($new_grade < $this->lowest_passing_grade){
                $this->passed_at = nullValue();
            }else if ($new_grade > $this->lowest_passing_grade){
                $this->passed_at = now();
            }
        }
        $this->save();
    }
}
