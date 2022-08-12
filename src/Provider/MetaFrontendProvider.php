<?php

/*
 * This file is part of ianm/no-meta-title.
 *
 * Copyright (c) 2021 - 2022 IanM.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

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
