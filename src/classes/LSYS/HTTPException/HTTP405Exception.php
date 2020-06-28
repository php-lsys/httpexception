<?php
namespace LSYS\HTTPException;
use LSYS\HTTPException;
class HTTP405Exception extends HTTPException {
	protected $_allow=null;
	protected $http_code = 405;
	public function allowed($methods)
	{
		if (is_array($methods))
		{
			$methods = implode(',', $methods);
		}
		$this->_allow=$methods;
		return $this;
	}
	public function headers(){
		return array('allow'=>$this->_allow);
	}
}
