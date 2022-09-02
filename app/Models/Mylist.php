<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

/**
 * Class Mylist
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $title_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Title|null $title
 * @property User|null $user
 *
 * @package App\Models
 */
class Mylist extends Model
{
	protected $table = 'mylist';

	protected $casts = [
		'user_id' => 'int',
		'title_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'title_id'
	];

	public function title()
	{
		return $this->belongsTo(Title::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
