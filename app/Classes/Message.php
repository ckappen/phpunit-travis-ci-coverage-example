<?php

namespace Projects\Texts;

/**
 * Class Message.
 */
class Message
{

    private $language;

    /**
     * Message constructor.
     *
     * @param $language
     */
    public function __construct($language)
    {
        $this->language = $language;
    }


    /**
     * Returns a MotD.
     *
     * @return string
     */
    public function getMessageOfTheDay()
    {
        return 'An apple a day, keeps the doctor away';
    }

}
