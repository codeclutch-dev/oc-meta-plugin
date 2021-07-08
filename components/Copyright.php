<?php namespace Codeclutch\Meta\Components;

use Lang;
use Codeclutch\Meta\Models\Settings;

class Copyright extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => Lang::get('codeclutch.meta::lang.plugin.components.copyright.name'),
            'description' => Lang::get('codeclutch.meta::lang.plugin.components.copyright.description')
        ];
    }

    public function defineProperties()
    {
        return [
            'display_name' => [
                'title' => Lang::get('codeclutch.meta::lang.plugin.components.copyright.display_name.name'),
                'description' => Lang::get('codeclutch.meta::lang.plugin.components.copyright.display_name.description'),
                'default' => true,
                'type' => 'checkbox',
            ],
            'header_size' => [
                'title' => Lang::get('codeclutch.meta::lang.plugin.components.copyright.header_size.name'),
                'description' => Lang::get('codeclutch.meta::lang.plugin.components.copyright.header_size.description'),
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
        $this->page['cc_copyright'] = Settings::instance()->copyright;
        $this->page['cc_display_copyright_name'] = $this->properties['display_name'];
        $this->page['cc_copyright_header_size'] = 'h' . ($this->properties['header_size'] + 1);
        $this->page['cc_year'] = date('Y');
    }
}
