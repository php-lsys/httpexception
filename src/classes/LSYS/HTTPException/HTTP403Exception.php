<?php
namespace LSYS\HTTPException;
use LSYS\HTTPException;
class HTTP403Exception extends HTTPException {
    protected $http_code = 403;
}
