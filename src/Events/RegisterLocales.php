<?php namespace Flarum\Events;

use Flarum\Locale\LocaleManager;

class RegisterLocales
{
    /**
     * @var LocaleManager
     */
    public $manager;

    /**
     * @param LocaleManager $manager
     */
    public function __construct(LocaleManager $manager)
    {
        $this->manager = $manager;
    }

    public function addTranslations($locale, $file)
    {
        $this->manager->addTranslations($locale, $file);
    }
}