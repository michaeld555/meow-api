<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * 
 * @property int $id
 * @property string|null $tag
 * @property int|null $title_id
 * @property Carbon|null $created_at
 * 
 * @property Title|null $title
 *
 * @package App\Models
 */
class Tag extends Model
{
	protected $table = 'tags';
	public $timestamps = false;

	protected $casts = [
		'title_id' => 'int'
	];

	protected $fillable = [
		'tag',
		'title_id'
	];

	public function title()
	{
		return $this->belongsTo(Title::class);
	}
}
