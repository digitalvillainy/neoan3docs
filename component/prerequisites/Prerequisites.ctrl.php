<?php
/* Generated by neoan3-cli */

namespace Neoan3\Components;

use Neoan3\Core\Unicore;

class Prerequisites extends Unicore
{
    function init()
    {
        $this->uni('docs')->hook('main','prerequisites')->output();
    }

}