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
 * Class Title
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property Carbon|null $creation_year
 * @property int|null $type_title
 * @property string|null $url_image
 * @property string|null $url_image2
 * @property string|null $url_image3
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Category[] $categories
 * @property Collection|Episode[] $episodes
 * @property Collection|Metric[] $metrics
 * @property Collection|Mylist[] $mylists
 * @property Collection|RecentActivity[] $recent_activities
 * @property Collection|Star[] $stars
 * @property Collection|Tag[] $tags
 *
 * @package App\Models
 */
class Title extends Model
{
	use SoftDeletes;
	protected $table = 'titles';

	protected $casts = [
		'type_title' => 'int'
	];

	protected $dates = [
		'creation_year'
	];

	protected $fillable = [
		'name',
		'description',
		'creation_year',
		'type_title',
		'url_image',
		'url_image2',
		'url_image3'
	];

	public function type_title()
	{
		return $this->belongsTo(TypeTitle::class, 'type_title');
	}

	public function categories()
	{
		return $this->hasMany(Category::class, 'id_title');
	}

	public function episodes()
	{
		return $this->hasMany(Episode::class);
	}

	public function metrics()
	{
		return $this->hasMany(Metric::class);
	}

	public function mylists()
	{
		return $this->hasMany(Mylist::class);
	}

	public function recent_activities()
	{
		return $this->hasMany(RecentActivity::class);
	}

	public function stars()
	{
		return $this->hasMany(Star::class);
	}

	public function tags()
	{
		return $this->hasMany(Tag::class);
	}
}
