<?php

namespace PFF\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PFFUserBundle extends Bundle
{
	public function getParent(){
		return "FOSUserBundle";
	}
}
