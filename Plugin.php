<?php namespace Codeclutch\Meta;

use System\Classes\PluginBase;


class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'codeclutch.meta::lang.plugin.name',
            'description' => 'codeclutch.meta::lang.plugin.description',
            'author' => 'codeclutch',
            'icon' => 'icon-home'
        ];
    }

    public function registerSettings()
    {
        return [
            'config' => [
                'label' => 'codeclutch.meta::lang.plugin.name',
                'description' => 'codeclutch.meta::lang.plugin.description',
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
