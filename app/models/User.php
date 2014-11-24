<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;

class User extends BaseModel implements UserInterface {

	use UserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
        protected $fillable = ['username', 'first_name','last_name','email', 'phone_number', 'password', 
                               'address', 'city', 'country_id', 'image'];


	protected $hidden = array('remember_token');
        
    /*
     * Defining Country relation
     */    
    public function country()
    {
        return $this->hasOne('Country', 'id', 'country_id');
    }
    
    /*
     * return the image path or default image
     */    
    public function imagePath()
    {
        return "assets/img/".(empty($this->image)?"profile.png":$this->image);
        
    }

}
