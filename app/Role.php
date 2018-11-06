<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Role
 *
 * @mixin \Eloquent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property string $descripction
 * @property int $id
 * @property string $name Nombre del rol del usuario
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereDescripction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereUpdatedAt($value)
 */
class Role extends Model
{
    const ADMIN = 1;
    const TEACHER = 2;
    const STUDENT = 3;

}
