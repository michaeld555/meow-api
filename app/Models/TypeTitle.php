<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeTitle
 * 
 * @property int $id
 * @property string|null $type
 * 
 * @property Collection|Title[] $titles
 *
 * @package App\Models
 */
class TypeTitle extends Model
{
	protected $table = 'type_title';
	public $timestamps = false;

	protected $fillable = [
		'type'
	];

	public function titles()
	{
		return $this->hasMany(Title::class, 'type_title');
	}
}
