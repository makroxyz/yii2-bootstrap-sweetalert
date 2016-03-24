<?php

namespace makroxyz\sweetalert;

use yii\web\AssetBundle;

/**
 * Class SweetAlertAsset
 */
class SweetAlertAsset extends AssetBundle
{

    /**
     * @var string the directory that contains the source asset files for this asset bundle.
     * A source asset file is a file that is part of your source code repository of your Web application.
     */
    public $sourcePath = '@bower/bootstrap-sweetalert/lib';

    /**
     * @var array list of JavaScript files that this bundle contains. Each JavaScript file can be
     * specified in one of the following formats:
     */
    public $js = [
        'sweet-alert.min.js',
    ];

    /**
     * @var array list of CSS files that this bundle contains. Each CSS file can be specified
     * in one of the three formats as explained in [[js]].
     */
    public $css = [
        'sweet-alert.css'
    ];

}