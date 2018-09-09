<?php
namespace LSYS\HTTPException;
use LSYS\HTTPException;
class HTTP408Exception extends HTTPException {
    protected $http_code = 408;
}
