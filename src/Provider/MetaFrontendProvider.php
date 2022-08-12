<?php

namespace IanM\NoMetaTitle\Provider;

use Flarum\Foundation\AbstractServiceProvider;
use Flarum\Frontend\Driver\TitleDriverInterface;
use IanM\NoMetaTitle\Frontend\Driver\NoForumTitleDriver;

class MetaFrontendProvider extends AbstractServiceProvider
{
    public function register()
    {
        $this->container->bind(TitleDriverInterface::class, NoForumTitleDriver::class);
    }
}
