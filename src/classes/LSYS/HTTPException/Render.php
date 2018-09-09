<?php
namespace LSYS\HTTPException;
use LSYS\HTTPException;
interface Render{
	public function __construct(HTTPException $e);
}