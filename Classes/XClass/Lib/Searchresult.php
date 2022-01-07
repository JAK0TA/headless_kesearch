<?php

declare(strict_types=1);

namespace Friendsoftypo3headless\HeadlessKesearch\XClass\Lib;

/**
 * Strip all HTML tags from the title since they are not needed for headless output.
 */
class Searchresult extends \Tpwd\KeSearch\Lib\Searchresult
{
    public function getTitle(): string
    {
        $title = parent::getTitle();

        return strip_tags($title);
    }
}
