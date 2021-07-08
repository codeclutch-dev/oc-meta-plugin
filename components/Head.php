<?php namespace Codeclutch\Meta\Components;

use Lang;
use Codeclutch\Meta\Models\Settings;

class Head extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => Lang::get('codeclutch.meta::lang.plugin.components.head.name'),
            'description' => Lang::get('codeclutch.meta::lang.plugin.components.head.description')
        ];
    }

    public function meta()
    {
        return [
            'author' => Settings::instance()->author,
            'color' => Settings::instance()->color,
            'copyright' => Settings::instance()->copyright,
            'icon' => Settings::instance()->icon,
            'keywords' => Settings::instance()->keywords,
            'logo' => Settings::instance()->logo,
            'og_image' => Settings::instance()->og_image,
            'title' => Settings::instance()->title
        ];
    }

}
