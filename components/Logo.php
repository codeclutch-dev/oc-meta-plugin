<?php namespace Codeclutch\Meta\Components;

use Lang;
use Codeclutch\Meta\Models\Settings;

class Logo extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => Lang::get('codeclutch.meta::lang.plugin.components.logo.name'),
            'description' => Lang::get('codeclutch.meta::lang.plugin.components.logo.description')
        ];
    }

    public function defineProperties()
    {
        return [
            'logo_height' => [
                'title'             => Lang::get('codeclutch.meta::lang.plugin.components.logo.height.name'),
                'description'       => Lang::get('codeclutch.meta::lang.plugin.components.logo.height.description'),
                'default'           => '150',
                'type'              => 'string',
            ],
            'logo_width' => [
                'title'             => Lang::get('codeclutch.meta::lang.plugin.components.logo.width.name'),
                'description'       => Lang::get('codeclutch.meta::lang.plugin.components.logo.width.description'),
                'default'           => 'auto',
                'type'              => 'string',
            ]
        ];
    }


    public function onRun()
    {
        $this->page['cc_logo'] = Settings::instance()->logo;
    }
}
