<?php
    namespace Announcements;

    use Announcements\Handler;
    use Psr\Container\ContainerInterface;
    use Zend\Expressive\Application;

    class RoutesDelegator
    {
        public function __invoke(ContainerInterface $container, $serviceName, callable $callback)
        {
            $app = $callback();

            $app->get('/announcements[/]', Handler\AnnouncementsHandler::class, 'announcements.read');
            return $app;
        }
    }
