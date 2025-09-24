<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {

    $routes->setRouteClass(DashedRoute::class);
    $routes->scope('/', function (RouteBuilder $builder): void {
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

        /* Authentication routes :: */
        $builder->connect('/signup', ['controller' => 'Auth', 'action' => 'signup']);
        $builder->connect('/login', ['controller' => 'Auth', 'action' => 'login']);
        $builder->connect('/logout', ['controller' => 'Auth', 'action' => 'logout']);

        /* Dashboard routes :: */
        $builder->connect('/dashboard', ['controller' => 'Backend\Dashboard', 'action' => 'dashboard']);

        /* ...and connect the rest of 'Pages' controller's URLs :: */
        $builder->connect('/pages/*', 'Pages::display');
        $builder->fallbacks();
    });
};
