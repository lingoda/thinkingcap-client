<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class DomainURLsCollection
{
    /**
     * @var string
     */
    private $language;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfString
     */
    private $languageURLs;

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return DomainURLsCollection
     */
    public function withLanguage($language)
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfString
     */
    public function getLanguageURLs()
    {
        return $this->languageURLs;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfString $languageURLs
     *
     * @return DomainURLsCollection
     */
    public function withLanguageURLs($languageURLs)
    {
        $new = clone $this;
        $new->languageURLs = $languageURLs;

        return $new;
    }
}
