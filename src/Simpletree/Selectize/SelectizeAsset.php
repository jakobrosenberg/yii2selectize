<?php

namespace Simpletree\Selectize;


use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Jakob Rosenberg <jakobrosenberg@gmail.com>
 * @var $defaultCss
 */
class SelectizeAsset extends AssetBundle
{
	public $sourcePath = '@Simpletree/Selectize/assets';

    public $js = array(
        'js/standalone/selectize.min.js',
    );


    public function getCss()
    {
        return $this->baseUrl.'/css/selectize.css';
    }

    public function getDefaultCss()
    {
        return $this->baseUrl.'/css/selectize.default.css';
    }

    public function getLegacyCss()
    {
        return $this->baseUrl.'/css/selectize.legacy.css';
    }

    public function getBootstrap2Css()
    {
        return $this->baseUrl.'/css/selectize.bootstrap2.css';
    }

    public function getBootstrap3Css()
    {
        return $this->baseUrl.'/css/selectize.bootstrap3.css';
    }

}
