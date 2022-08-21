<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Metric
 * 
 * @property int $id
 * @property int|null $type_action
 * @property int|null $user_id
 * @property int|null $title_id
 * @property int|null $episode_id
 * @property Carbon|null $created_at
 * 
 * @property Episode|null $episode
 * @property TypeMetric|null $type_metric
 * @property Title|null $title
 * @property User|null $user
 *
 * @package App\Models
 */
class Metric extends Model
{
	protected $table = 'metrics';
	public $timestamps = false;

	protected $casts = [
		'type_action' => 'int',
		'user_id' => 'int',
		'title_id' => 'int',
		'episode_id' => 'int'
	];

	protected $fillable = [
		'type_action',
		'user_id',
		'title_id',
		'episode_id'
	];

	public function episode()
	{
		return $this->belongsTo(Episode::class);
	}

	public function type_metric()
	{
		return $this->belongsTo(TypeMetric::class, 'type_action');
	}

	public function title()
	{
		return $this->belongsTo(Title::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
