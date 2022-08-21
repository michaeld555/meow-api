<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Star
 * 
 * @property int $id
 * @property int|null $star_number
 * @property int|null $user_id
 * @property int|null $title_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property User|null $user
 * @property Title|null $title
 *
 * @package App\Models
 */
class Star extends Model
{
	use SoftDeletes;
	protected $table = 'stars';

	protected $casts = [
		'star_number' => 'int',
		'user_id' => 'int',
		'title_id' => 'int'
	];

	protected $fillable = [
		'star_number',
		'user_id',
		'title_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function title()
	{
		return $this->belongsTo(Title::class);
	}
}
