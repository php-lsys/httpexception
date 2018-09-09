<?php
namespace LSYS\HTTPException;
interface RenderArray extends Render{
	public function to_array();
}