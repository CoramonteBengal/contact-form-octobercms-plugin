<?php namespace Ctro\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;


class ContactForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'ctro.contact::lang.components.contact.name',
            'description' => 'ctro.contact::lang.components.contact.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'recipient' => [
                'title'       => 'ctro.contact::lang.components.contact.settings.recipient.title',
                'description' => 'ctro.contact::lang.components.contact.settings.recipient.description',
                'type'        => 'string',
                'required'    => true,
                'validationPattern' => '^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$'
            ],
            'template' => [
                'title'       => 'ctro.contact::lang.components.contact.settings.template.title',
                'description' => 'ctro.contact::lang.components.contact.settings.template.description',
                'type'        => 'string',
                'required'    => 'true',
            ],
        ];
    }

    public function onSubmitContactForm()
    {
        $template = $this->property('template');
        $form_data = Input::all();        
        $recipient = $this->property('recipient');

        Mail::send($template, $form_data, function($msg) use ($recipient, $form_data) {
            $msg->to($recipient);
            $msg->replyTo($form_data['email'], $form_data['name']);
        });

        return true;
    }

}
