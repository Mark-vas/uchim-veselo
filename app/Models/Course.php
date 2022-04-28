<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
	use SoftDeletes;

    protected $table = 'courses';

	protected $fillable = [
		'title',
		'description',
		'text',
        'img',
	];

    public function lessons() {
        return $this->hasMany(Lesson::class);
    }

	public function courseReviews() {
		return $this->hasMany(CourseReview::class);
	}
	
    public function first_tests() {
        return $this->hasMany(FirstTest::class);
    }
    public function second_tests() {
        return $this->hasMany(SecondTest::class);
    }
    public function third_tests() {
        return $this->hasMany(ThirdTest::class);
    }
		
}
