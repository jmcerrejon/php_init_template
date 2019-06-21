<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
       'name', 'email', 'password',
   ];

   /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
   protected $hidden = [
       'password', 'remember_token',
   ];

   /**
    * Get Role of User
    *
    * @return \Illuminate\Database\Eloquent\Relations\hasOne
    */
   public function role()
   {
       return $this->hasOne('Role');

   }
 }