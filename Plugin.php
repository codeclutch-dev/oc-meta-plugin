<?php namespace Codeclutch\Meta;

use Backend;
use System\Classes\PluginBase;
use Lang;


class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Meta',
            'description' => Lang::get('codeclutch.meta::lang.plugin.description'),
            'author' => 'codeclutch',
            'icon' => 'icon-home'
        ];
    }

    public function registerSettings()
    {
        return [
            'meta' => [
                'label' => Lang::get('codeclutch.meta::lang.plugin.name'),
                'description' => Lang::get('codeclutch.meta::lang.plugin.description'),
                'category' => 'codeclutch',
                'icon' => 'icon-home',
                'order' => 1,
                'class' => 'Codeclutch\Meta\Models\Settings'
            ]
        ];
    }


    public function registerComponents()
    {
        return [
            'Codeclutch\Meta\Components\Copyright' => 'copyright',
            'Codeclutch\Meta\Components\Logo' => 'logo',
            'Codeclutch\Meta\Components\Head' => 'head',
            'Codeclutch\Meta\Components\Signature' => 'signature',
        ];
    }
}
