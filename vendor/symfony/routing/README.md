Routing Component
=================

The Routing component maps an HTTP request to a set of configuration variables.

Getting Started
---------------

```
$ composer require symfony/routing
```

```php
use App\Controller\CrudController;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$route = new Route('/crud/{slug}', ['_controller' => CrudController::class]);
$routes = new RouteCollection();
$routes->add('crud_show', $route);

$context = new RequestContext();

// Routing can match routes with incoming requests
$matcher = new UrlMatcher($routes, $context);
$parameters = $matcher->match('/crud/lorem-ipsum');
// $parameters = [
//     '_controller' => 'App\Controller\CrudController',
//     'slug' => 'lorem-ipsum',
//     '_route' => 'crud_show'
// ]

// Routing can also generate URLs for a given route
$generator = new UrlGenerator($routes, $context);
$url = $generator->generate('crud_show', [
    'slug' => 'my-crud-post',
]);
// $url = '/crud/my-crud-post'
```

Resources
---------

  * [Documentation](https://symfony.com/doc/current/routing.html)
  * [Contributing](https://symfony.com/doc/current/contributing/index.html)
  * [Report issues](https://github.com/symfony/symfony/issues) and
    [send Pull Requests](https://github.com/symfony/symfony/pulls)
    in the [main Symfony repository](https://github.com/symfony/symfony)
