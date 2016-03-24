<?php

namespace makroxyz\sweetalert;

use Yii;
use yii\web\AssetBundle;
use yii\web\View;

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
        ['sweet-alert.js', 'position' => View::POS_HEAD]
    ];

    /**
     * @var array list of CSS files that this bundle contains. Each CSS file can be specified
     * in one of the three formats as explained in [[js]].
     */
    public $css = [
        'sweet-alert.css'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
    public $overrideConfirm = true;
    
    public function init()
    {
        parent::init();
        if ($this->overrideConfirm) {
            self::overrideConfirm();
        }
    }

    public static function overrideConfirm()
    {
        Yii::$app->view->registerJs('
            yii.confirm = function (message, ok, cancel) {
                swal({
                    title: message,
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-primary",
                },
                function(isConfirm){   
                    if (isConfirm) {
                        !ok || ok();
                    } else {
                        !cancel || cancel();
                    }
                });
            }
        ');
    }

}
