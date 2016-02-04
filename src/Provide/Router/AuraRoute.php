<?php
/**
 * This file is part of the BEAR.AuraRouterModule package
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace BEAR\Package\Provide\Router;

use Aura\Router\Exception;
use Aura\Router\Router as AuraRouter;

/**
 * A extented router for BEAR.Sunday
 */
class AuraRoute extends AuraRouter
{
    /**
     * Adds a route
     *
     * @param string $name
     * @param string $path
     *
     * @return $this
     */
    public function route($name, $path)
    {
        return $this->add($name, $path)->addValues(['path' => $name]);
    }
}
