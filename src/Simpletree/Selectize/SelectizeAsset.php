<?php

namespace Simpletree\Selectize;


use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Jakob Rosenberg <jakobrosenberg@gmail.com>
 */
class SelectizeAsset extends AssetBundle
{
	public $sourcePath = '@Simpletree/Selectize/assets';

    public $js = array(
        'js/standalone/selectize.min.js',
    );

	public $css = array(
		'css/selectize.css',
	);

}
