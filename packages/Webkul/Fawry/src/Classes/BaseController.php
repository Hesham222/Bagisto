<?php

namespace Webkul\Fawry\Classes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Webkul\Fawry\Traits\SetVariables;
use Webkul\Fawry\Traits\SetRequiredFields;

class BaseController
{
	use SetVariables,SetRequiredFields;
}
