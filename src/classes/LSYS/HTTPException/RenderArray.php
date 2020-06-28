<?php
namespace LSYS\HTTPException;
interface RenderArray extends Render{
    /**
     * return array
     * @return array
     */
	public function toArray():array;
}