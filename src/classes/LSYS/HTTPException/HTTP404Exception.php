<?php
namespace LSYS\HTTPException;
use LSYS\HTTPException;
class HTTP404Exception extends HTTPException {
    protected $http_code = 404;
}
