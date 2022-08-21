<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 *
 * @property int $id
 * @property string|null $name
 * @property string $email
 * @property string|null $password
 * @property string|null $twitter_id
 * @property string|null $google_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Collection|Metric[] $metrics
 * @property Collection|Mylist[] $mylists
 * @property Collection|Star[] $stars
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

	protected $table = 'users';

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'email',
		'password',
		'twitter_id',
		'google_id'
	];

	public function metrics()
	{
		return $this->hasMany(Metric::class);
	}

	public function mylists()
	{
		return $this->hasMany(Mylist::class);
	}

	public function stars()
	{
		return $this->hasMany(Star::class);
	}
}
