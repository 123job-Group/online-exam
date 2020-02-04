<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class QuestionTemplate extends Model
{
    protected $fillable = ['name', 'department_id', 'subject_id', 'student_type_id', 'is_active', 'is_deleted', 'total_questions', 'total_marks', 'negative_marks'];

     public function department(){
        return $this->belongsTo(Department::class);
	 }

	 public function subject(){
        return $this->belongsTo(Subject::class);
	 }

	 public function studentType(){
        return $this->belongsTo(StudentType::class);
	 }
}
