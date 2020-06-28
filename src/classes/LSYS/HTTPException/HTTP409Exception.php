<?php
namespace LSYS\HTTPException;
use LSYS\HTTPException;
class HTTP409Exception extends HTTPException {
    protected $http_code = 409;
}
