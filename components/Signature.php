<?php namespace Codeclutch\Meta\Components;

use Lang;
use Codeclutch\Meta\Models\Settings;

class Signature extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => Lang::get('codeclutch.meta::lang.plugin.components.signature.name'),
            'description' => Lang::get('codeclutch.meta::lang.plugin.components.signature.description')
        ];
    }

    public function defineProperties()
    {
        return [
            'signature_text' => [
                'title' => Lang::get('codeclutch.meta::lang.plugin.components.signature.text.name'),
                'description' => Lang::get('codeclutch.meta::lang.plugin.components.signature.text.description'),
                'default' => 'Project and realisation',
                'type' => 'string',
            ]
        ];
    }


    public function onRun()
    {
        $this->page['cc_author_logo'] = Settings::instance()->author_logo;
        $this->page['cc_author'] = Settings::instance()->author;
        $this->page['cc_author_link'] = Settings::instance()->author_link;
        $this->page['cc_signature_text'] = $this->properties['signature_text'];
        $this->page['cc_realisation_year'] = Settings::instance()->realisation_year;
    }
}
