<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class DomainURLsCollection
{
    private string $language;

    
    private ArrayOfString $languageURLs;

    
    public function getLanguage(): string
    {
        return $this->language;
    }

    
    public function withLanguage(string $language): static
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }

    
    public function getLanguageURLs(): ArrayOfString
    {
        return $this->languageURLs;
    }

    
    public function withLanguageURLs(ArrayOfString $languageURLs): static
    {
        $new = clone $this;
        $new->languageURLs = $languageURLs;

        return $new;
    }
}
