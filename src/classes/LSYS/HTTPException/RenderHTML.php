<?php
namespace LSYS\HTTPException;
interface RenderHTML extends Render{
    /**
     * @return string
     */
	public function toHtml():?string;
}