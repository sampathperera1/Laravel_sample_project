<?php

class Country extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'country';
        
        /*
         * return key=>value array of all countries 
         */
        public static function getCountryArray()    {
            $countries = Country::all();
            $return = array();
            foreach ($countries as $country)    {
                $return[$country->id] = $country->country_name;
            }
            return $return;
        }


}
