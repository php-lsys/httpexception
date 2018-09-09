<?php
namespace LSYS\HTTPException;
use LSYS\HTTPException;
class HTTP415Exception extends HTTPException {
    protected $http_code = 415;
}
