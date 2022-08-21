<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RecentActivity
 * 
 * @property int $id
 * @property string|null $description
 * @property int|null $title_id
 * @property Carbon|null $created_at
 * 
 * @property Title|null $title
 *
 * @package App\Models
 */
class RecentActivity extends Model
{
	protected $table = 'recent_activity';
	public $timestamps = false;

	protected $casts = [
		'title_id' => 'int'
	];

	protected $fillable = [
		'description',
		'title_id'
	];

	public function title()
	{
		return $this->belongsTo(Title::class);
	}
}
