<?php namespace Codeclutch\Meta\Components;

use Codeclutch\Meta\Models\Settings;

class Copyright extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'codeclutch.meta::lang.components.copyright.name',
            'description' => 'codeclutch.meta::lang.components.copyright.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'display_name' => [
                'title' => 'codeclutch.meta::lang.components.copyright.display_name.name',
                'description' => 'codeclutch.meta::lang.components.copyright.display_name.description',
                'default' => true,
                'type' => 'checkbox',
            ],
            'header_size' => [
                'title' => 'codeclutch.meta::lang.components.copyright.header_size.name',
                'description' => 'codeclutch.meta::lang.components.copyright.header_size.description',
                'default' => 5,
                'type' => 'dropdown',
                'options' => [
                    'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
                ],
                'required' => 'true',
            ]
        ];
    }


    public function onRun()
    {
        $this->page['cc_copyright'] = [
            'copyright' => Settings::instance()->copyright,
            'display_name' => $this->properties['display_name'],
            'header_size' => 'h' . ($this->properties['header_size'] + 1),
            'year' => date('Y'),
        ];
    }
}
