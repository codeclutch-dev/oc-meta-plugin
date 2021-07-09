<?php namespace Codeclutch\Meta\Components;

use Codeclutch\Meta\Models\Settings;

class Signature extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'codeclutch.meta::lang.components.signature.name',
            'description' => 'codeclutch.meta::lang.components.signature.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'signature_text' => [
                'title' => 'codeclutch.meta::lang.components.signature.text.name',
                'description' => 'codeclutch.meta::lang.components.signature.text.description',
                'default' => 'Project and realisation',
                'type' => 'string',
            ]
        ];
    }


    public function onRun()
    {
        $this->page['cc_signature'] = [
            'author_logo' => Settings::instance()->author_logo,
            'author' => Settings::instance()->author,
            'author_link' => Settings::instance()->author_link,
            'signature_text' => $this->properties['signature_text'],
            'realisation_year' => Settings::instance()->realisation_year,
        ];
    }
}
