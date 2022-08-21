<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Episode
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $duration
 * @property string|null $description
 * @property int|null $ep_number
 * @property int|null $title_id
 * @property string|null $url_image
 * @property string|null $url_image2
 * @property string|null $video_url
 * @property Carbon|null $created_at
 * @property Carbon|null $update_at
 * @property string|null $deleted_at
 * 
 * @property Title|null $title
 * @property Collection|Metric[] $metrics
 *
 * @package App\Models
 */
class Episode extends Model
{
	use SoftDeletes;
	protected $table = 'episodes';
	public $timestamps = false;

	protected $casts = [
		'ep_number' => 'int',
		'title_id' => 'int'
	];

	protected $dates = [
		'update_at'
	];

	protected $fillable = [
		'name',
		'duration',
		'description',
		'ep_number',
		'title_id',
		'url_image',
		'url_image2',
		'video_url',
		'update_at'
	];

	public function title()
	{
		return $this->belongsTo(Title::class);
	}

	public function metrics()
	{
		return $this->hasMany(Metric::class);
	}
}
