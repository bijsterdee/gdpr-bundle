<?php

namespace Bijsterdee\GdprBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BijsterdeeGdprBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container The service container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}