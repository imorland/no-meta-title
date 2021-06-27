<?php

/*
 * This file is part of ianm/no-meta-title.
 *
 * Copyright (c) 2021 IanM.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace IanM\NoMetaTitle\Overrides;

use Flarum\Extension\ExtensionManager;
use Illuminate\Support\Arr;

class Document extends \Flarum\Frontend\Document
{
    /**
     * @return string
     */
    protected function makeTitle(): string
    {
        $onHomePage = rtrim($this->request->getUri()->getPath(), '/') === '';
        
        /** @var ExtensionManager $extensions */
        $extensions = resolve(ExtensionManager::class);

        return $extensions->isEnabled('ianm-no-meta-title') ? ($this->title && ! $onHomePage ? $this->title : '') : ($this->title && ! $onHomePage ? $this->title.' - ' : '').Arr::get($this->forumApiDocument, 'data.attributes.title');
    }
}
