<?php namespace Codeclutch\Meta\Components;

use Codeclutch\Meta\Models\Settings;

class Head extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'codeclutch.meta::lang.components.head.name',
            'description' => 'codeclutch.meta::lang.components.head.description'
        ];
    }

    public function onRun()
    {
        $this->page['cc_head'] = [
            'author' => Settings::instance()->author,
            'theme_color' => Settings::instance()->theme_color,
            'copyright' => Settings::instance()->copyright,
            'icon' => Settings::instance()->icon,
            'keywords' => Settings::instance()->keywords,
            'logo' => Settings::instance()->logo,
            'og_image' => Settings::instance()->og_image,
            'og_image_width' => Settings::instance()->og_image_width,
            'og_image_height' => Settings::instance()->og_image_height,
            'page_title' => Settings::instance()->page_title
        ];
    }

}
