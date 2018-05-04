<?php
namespace Haassie\DemoExtension\MetaTag;

use TYPO3\CMS\Core\MetaTag\AbstractMetaTagManager;

class RichardMetaTagManager extends AbstractMetaTagManager
{
    protected $handledProperties = [
        'richard-custom-property' => ['nameAttribute' => 'http-equiv']
    ];
}
