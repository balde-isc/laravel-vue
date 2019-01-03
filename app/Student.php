<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Student
 *
 * @mixin \Eloquent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUserId($value)
 */
class Student extends Model
{
    protected $fillable = ['user_id', 'title'];

	protected $appends = ['courses_formatted'];

    public function courses () {
    	return $this->belongsToMany(Course::class);
    }

	public function user () {
		return $this->belongsTo(User::class)->select('id', 'role_id', 'name', 'email');
	}
}
