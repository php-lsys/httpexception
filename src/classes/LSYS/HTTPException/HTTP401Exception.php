<?php
namespace LSYS\HTTPException;
use LSYS\HTTPException;
class HTTP401Exception extends HTTPException {
    protected $http_code = 401;
	public function headers(){
		if (!$this->_auth) return array();
		return array('www-authenticate'=>$this->_auth);
	}
	public function authenticate($realm,$type= 'Basic')
	{
		$realm=str_replace('"', "", $realm);
		$this->_auth='Basic realm="'.$realm.'"';
		return $this;
	}
	public function clear_authenticate()
	{
		$this->_auth=null;
		return $this;
	}
}
