<?php namespace Codeclutch\Meta\Components;

use Codeclutch\Meta\Models\Settings;

class Logo extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'codeclutch.meta::lang.components.logo.name',
            'description' => 'codeclutch.meta::lang.components.logo.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'height' => [
                'title'             => 'codeclutch.meta::lang.components.logo.height.name',
                'description'       => 'codeclutch.meta::lang.components.logo.height.description',
                'default'           => '150',
                'type'              => 'string',
            ],
            'width' => [
                'title'             => 'codeclutch.meta::lang.components.logo.width.name',
                'description'       => 'codeclutch.meta::lang.components.logo.width.description',
                'default'           => 'auto',
                'type'              => 'string',
            ],
        ];
    }


    public function onRun()
    {
        $this->page['cc_logo'] = [
            'logo' => Settings::instance()->logo,
            'width' => $this->properties['width'],
            'height' => $this->properties['height'],
        ];
    }
}
