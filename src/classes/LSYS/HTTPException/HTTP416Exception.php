<?php
namespace LSYS\HTTPException;
use LSYS\HTTPException;
class HTTP416Exception extends HTTPException {
    protected $http_code = 416;
}
