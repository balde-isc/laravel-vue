<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Review
 *
 * @mixin \Eloquent
 * @property string|null $comment
 * @property int $course_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property int $id
 * @property float $rating
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereUserId($value)
 */
class Review extends Model
{
    //
}
