<?php

class Token extends BaseModel
{

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'tokens';
    protected $primaryKey = 'token';

     /*
     * Defining User relation
     */    
    public function user()
    {
        return $this->hasOne('User', 'id', 'user_id');
    }
    
    /*
     * generated new token and save it
     * @param  int  $user_id
     * @param  int type 1=Activation, 2=Passwd reset
     * return string token
     */

    public static function generateToken($user_id, $type = 1)
    {
        $token = md5(uniqid(rand(), true));
        $tokenObj = new Token;
        $tokenObj->token = $token;
        $tokenObj->user_id = $user_id;
        $tokenObj->type = $type;
        $tokenObj->save();
        return $token;
    }
    

}
