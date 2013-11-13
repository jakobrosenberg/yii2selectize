<?php

namespace Simpletree\Selectize;

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

    public $jsOptions = array(
        'position'=>View::POS_HEAD
    );

}
