<?php
namespace Haassie\DemoExtension\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class DemoController extends ActionController
{
    public function demoAction()
    {
        $ogMetaTagManager = \TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry::getInstance()->getManagerForProperty('og:title');
        $ogMetaTagManager->addProperty('og:title', 'This is the OG title from a controller');
        $ogMetaTagManager->addProperty('og:site_name', 'This is the overridden og:site_name #1');
        $ogMetaTagManager->addProperty('og:site_name', 'This is the overridden og:site_name #2', [], true);

//        $ogMetaTagManager->addProperty('og:image', '/path/to/image.jpg', ['width' => 210, 'height' => 201, 'abc' => 1]);
//        $ogMetaTagManager->addProperty('og:image:width', '400');
//        $ogMetaTagManager->addProperty('og:image:width', '300');
//        $ogMetaTagManager->addProperty('og:image:height', '400');
//
//        $ogMetaTagManager->addProperty('og:image', '/path/to/image2.jpg');
//        $ogMetaTagManager->addProperty('og:image:width', '200');
//        $ogMetaTagManager->addProperty('og:image:height', '300');

//        $ogMetaTagManager->addProperty('og:image:abc', '100');

        //richard-custom-property
//        $richardMetaTagManager = \TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry::getInstance()->getManagerForProperty('richard-custom-property');
//        $richardMetaTagManager->addProperty('richard-custom-property', 'custom property');

        $this->view->assign('foo', 'bar');
    }
}
