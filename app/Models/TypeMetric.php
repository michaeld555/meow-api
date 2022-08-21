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
 * Class TypeMetric
 * 
 * @property int $id
 * @property string|null $action
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Metric[] $metrics
 *
 * @package App\Models
 */
class TypeMetric extends Model
{
	use SoftDeletes;
	protected $table = 'type_metric';

	protected $fillable = [
		'action'
	];

	public function metrics()
	{
		return $this->hasMany(Metric::class, 'type_action');
	}
}
