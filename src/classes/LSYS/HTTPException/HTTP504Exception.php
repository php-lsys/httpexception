<?php
namespace LSYS\HTTPException;
use LSYS\HTTPException;
class HTTP504Exception extends HTTPException {
    protected $http_code = 504;
}
