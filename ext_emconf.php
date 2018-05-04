<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Demo extension',
    'description' => '',
    'category' => 'misc',
    'author' => 'Richard Haeser',
    'author_email' => '',
    'clearCacheOnLoad' => 0,
    'dependencies' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
    'autoload' => array(
        'psr-4' => array('Haassie\\DemoExtension\\' => 'Classes')
    ),
    'conflicts' => '',
    'suggests' => array(),
);
