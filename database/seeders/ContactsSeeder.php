<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact();
        $contact->name = 'info@webdino.ru';
        $contact->title = 'Ваша почта - наша забота';
        $contact->type = 'email';
        $contact->link = 'mailto:info@webdino.ru';
        $contact->save();

        $contact = new Contact();
        $contact->name = '+7-(909)-375-16-98';
        $contact->title = 'Звоните в рабочее время, а лучше писать в любом мессенджере';
        $contact->type = 'phone';
        $contact->link = 'tel:+79093751698';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Instagram';
        $contact->title = 'Наша страничка с красивым контентом';
        $contact->type = 'social';
        $contact->link = 'https://www.instagram.com/dinosaur_web_/';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Telegram';
        $contact->title = 'Канал с интересными статьями';
        $contact->type = 'social';
        $contact->link = '#';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Github';
        $contact->title = 'Почему бы и нет? Мы же Digital Agency';
        $contact->type = 'social';
        $contact->link = '#';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Behance';
        $contact->title = 'Наши презентации';
        $contact->type = 'social';
        $contact->link = '#';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'LinkedIn';
        $contact->title = 'И тут мы есть';
        $contact->type = 'social';
        $contact->link = '#';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Facebook';
        $contact->title = 'Кому не удобен WA';
        $contact->type = 'social';
        $contact->link = '#';
        $contact->save();
    }
}
