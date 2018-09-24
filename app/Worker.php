<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Worker
 *
 * @property int $id
 * @property string $name
 * @property string|null $position
 * @property string|null $employment_date
 * @property int|null $salary
 * @property int|null $chief_id
 * @property int|null $level
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereChiefId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereEmploymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Worker extends Model
{
    //
}
