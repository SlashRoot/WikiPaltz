$wgResourceModules['skins.foobar'] = array(
    'styles' => array(
        'common/commonElements.css' => array( 'media' => 'screen' ),
        'common/commonContent.css' => array( 'media' => 'screen' ),
        'common/commonInterface.css' => array( 'media' => 'screen' ),
        'foobar/screen.css' => array( 'media' => 'screen' ),
    ),
    'scripts' => 'foobar/vector.js',
    'remoteBasePath' => $GLOBALS['wgStylePath'],
    'localBasePath' => $GLOBALS['wgStyleDirectory'],
);
