<?php

namespace Freelancer\MainBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FreelancerMainBundle extends Bundle
{
     public function getParent()
    {
        return 'FOSUserBundle';
    }
}
