<?php
namespace LSYS;
use LSYS\HTTPException\Render;
class HTTPException extends \LSYS\Exception {
	protected static $_renders;
	public static function setRender(callable $render){
		self::$_renders[get_called_class()]=$render;
	}
	protected $http_code = 200;
	public function __construct(?string $message, \Exception $previous = NULL,$code=0)
	{
	    if ($message==null&&$previous)$message=$previous->getMessage();
	    if ($code==0&&$previous)$code=$previous->getCode();
	    parent::__construct($message,$code, $previous);
	}
	public function headers():array{
		return array();
	}
	/**
	 * @return \LSYS\HTTPException\Render
	 */
	public function getRender(){
	    $class=[];
	    $_class=get_called_class();
	    while (true){
	        $class[]=$_class;
	        $_class=get_parent_class($_class);
	        if (!$_class)break;
	    }
	    $renders=null;
	    foreach ($class as $v){
	        if (isset(self::$_renders[$v])){
	            $renders=self::$_renders[$v];
	            break;
	        }
	    }
	    if (!$renders)return false;
	    $obj=call_user_func($renders,$this);
		if(!$obj instanceof Render)return false;
		return $obj;
	}
	/**
	 * get http code
	 * @return number
	 */
	public function getHttpCode():int{
		return $this->http_code;
	}
}