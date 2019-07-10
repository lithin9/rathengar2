<?php

	namespace App\Models;

	use App\Models\UserPermissions;
	use Illuminate\Database\Eloquent\SoftDeletes;
	use Illuminate\Notifications\Notifiable;
	use Illuminate\Contracts\Auth\MustVerifyEmail;
	use Illuminate\Foundation\Auth\User as Authenticatable;

	class Users extends Authenticatable {
		use Notifiable;

		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = [
			'name',
			'email',
			'password',];

		/**
		 * The attributes that should be hidden for arrays.
		 *
		 * @var array
		 */
		protected $hidden = [
			'password',
			'remember_token',];

		/**
		 * The attributes that should be cast to native types.
		 *
		 * @var array
		 */
		protected $casts = [
			'email_verified_at' => 'datetime',];
		protected $dates = ['deleted_at'];

		public function userPermissions() {
			return $this->hasMany(UserPermissions::class, 'userId', 'id');
		}

		public static function laratablesCustomAction($user) {
			return view('users.action')
				->with('id', $user->getKey())
				->render();
		}

		public function setPermission($label, $permission) {
			if($this->validatePermission($label)) {
				return UserPermissions::updateOrCreate([
																								 'userId' => $this->getKey(),
																								 'label'  => $label],
																							 ['permission' => $permission]);
			} else {
				return false;
			}
		}

		public static function validatePermission($label) {
			return in_array($label, UserPermissions::VALIDPERMISSIONS);
		}
	}
