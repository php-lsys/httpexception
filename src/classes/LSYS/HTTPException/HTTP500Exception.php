<?php
namespace LSYS\HTTPException;
use LSYS\HTTPException;
class HTTP500Exception extends HTTPException {
    protected $http_code = 500;
}
