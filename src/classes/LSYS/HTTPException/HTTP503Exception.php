<?php
namespace LSYS\HTTPException;
use LSYS\HTTPException;
class HTTP503Exception extends HTTPException {
    protected $http_code = 503;
}
