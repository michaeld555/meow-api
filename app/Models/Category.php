<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property string|null $categorie_name
 * @property int|null $id_title
 * @property Carbon|null $created_at
 * 
 * @property Title|null $title
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';
	public $timestamps = false;

	protected $casts = [
		'id_title' => 'int'
	];

	protected $fillable = [
		'categorie_name',
		'id_title'
	];

	public function title()
	{
		return $this->belongsTo(Title::class, 'id_title');
	}
}
