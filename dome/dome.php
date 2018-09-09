<?php
use LSYS\HTTPException\HTTP404Exception;
use LSYS\HTTPException\RenderHTML;
use LSYS\HTTPException\RenderArray;
use LSYS\HTTPException;
include_once __DIR__."/../vendor/autoload.php";

//注册错误
class render404 implements RenderArray,RenderHTML{
    public function __construct(HTTPException $e){
        
    }
	public function to_html(){
		return '404 page';
	}
	public function to_array(){
		return [];
	}
}
HTTP404Exception::setRender(function($e){
	return new render404($e);
});


//错误..
try{
	throw new HTTP404Exception("fasd");
}catch (\LSYS\HTTPException $e){
	$render=$e->getRender();
	http_response_code($e->getHttpCode());
	if($render instanceof RenderHTML){
		echo $render->to_html();
	}
	if($render instanceof RenderArray){
		print_r($render->to_array());
	}
}
