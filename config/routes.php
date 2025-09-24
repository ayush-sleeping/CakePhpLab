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
        $builder->connect('/dashboard', ['controller' => 'Dashboard', 'action' => 'index']);

        /* Users CRUD routes :: */
        // Let CakePHP handle default routing automatically
        // This will create routes like: /users, /users/add, /users/edit/1, /users/view/1, /users/delete/1

        /* ...and connect the rest of 'Pages' controller's URLs :: */
        $builder->connect('/pages/*', 'Pages::display');
        $builder->fallbacks();
    });
};
