<?php

declare(strict_types=1);

namespace Announcements;

/**
 * The configuration provider for the Announcements module
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     */
    public function __invoke() : array
    {
        return [
            'dependencies' => $this->getDependencies(),
            'templates'    => $this->getTemplates(),
        ];
    }

    /**
     * Returns the container dependencies
     */
    public function getDependencies() : array
    {
        return [
            'delegators' => [
                \Zend\Expressive\Application::class => [
                    RoutesDelegator::class,
                ]
                ],
            'invokables' => [
            ],
            'factories'  => [
                Handler\AnnouncementsHandler::class =>
                Handler\AnnouncementsReadHandlerFactory::class
            ],
        ];
    }

    /**
     * Returns the templates configuration
     */
    public function getTemplates() : array
    {
        return [
            'paths' => [
                'announcements'    => [__DIR__ . '/../templates/'],
            ],
        ];
    }
}
