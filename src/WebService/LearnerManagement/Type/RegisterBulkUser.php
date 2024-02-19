<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RegisterBulkUser implements RequestInterface
{
    private string $apiKey;

    
    private string $userID;

    
    private string $userFirstName;

    
    private string $userLastName;

    
    private string $userTitle;

    
    private string $userEmail;

    
    private string $userPassword;

    
    private string $userScreenName;

    
    private string $userLanguage;

    
    private string $userCustomMetadata;

    
    private string $source;

    
    private string $syncDomainID;

    
    private bool $protectFromManualChange;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $userID, string $userFirstName, string $userLastName, string $userTitle, string $userEmail, string $userPassword, string $userScreenName, string $userLanguage, string $userCustomMetadata, string $source, string $syncDomainID, bool $protectFromManualChange)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
        $this->userFirstName = $userFirstName;
        $this->userLastName = $userLastName;
        $this->userTitle = $userTitle;
        $this->userEmail = $userEmail;
        $this->userPassword = $userPassword;
        $this->userScreenName = $userScreenName;
        $this->userLanguage = $userLanguage;
        $this->userCustomMetadata = $userCustomMetadata;
        $this->source = $source;
        $this->syncDomainID = $syncDomainID;
        $this->protectFromManualChange = $protectFromManualChange;
    }

    
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    
    public function withApiKey(string $apiKey): static
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    
    public function getUserID(): string
    {
        return $this->userID;
    }

    
    public function withUserID(string $userID): static
    {
        $new = clone $this;
        $new->userID = $userID;

        return $new;
    }

    
    public function getUserFirstName(): string
    {
        return $this->userFirstName;
    }

    
    public function withUserFirstName(string $userFirstName): static
    {
        $new = clone $this;
        $new->userFirstName = $userFirstName;

        return $new;
    }

    
    public function getUserLastName(): string
    {
        return $this->userLastName;
    }

    
    public function withUserLastName(string $userLastName): static
    {
        $new = clone $this;
        $new->userLastName = $userLastName;

        return $new;
    }

    
    public function getUserTitle(): string
    {
        return $this->userTitle;
    }

    
    public function withUserTitle(string $userTitle): static
    {
        $new = clone $this;
        $new->userTitle = $userTitle;

        return $new;
    }

    
    public function getUserEmail(): string
    {
        return $this->userEmail;
    }

    
    public function withUserEmail(string $userEmail): static
    {
        $new = clone $this;
        $new->userEmail = $userEmail;

        return $new;
    }

    
    public function getUserPassword(): string
    {
        return $this->userPassword;
    }

    
    public function withUserPassword(string $userPassword): static
    {
        $new = clone $this;
        $new->userPassword = $userPassword;

        return $new;
    }

    
    public function getUserScreenName(): string
    {
        return $this->userScreenName;
    }

    
    public function withUserScreenName(string $userScreenName): static
    {
        $new = clone $this;
        $new->userScreenName = $userScreenName;

        return $new;
    }

    
    public function getUserLanguage(): string
    {
        return $this->userLanguage;
    }

    
    public function withUserLanguage(string $userLanguage): static
    {
        $new = clone $this;
        $new->userLanguage = $userLanguage;

        return $new;
    }

    
    public function getUserCustomMetadata(): string
    {
        return $this->userCustomMetadata;
    }

    
    public function withUserCustomMetadata(string $userCustomMetadata): static
    {
        $new = clone $this;
        $new->userCustomMetadata = $userCustomMetadata;

        return $new;
    }

    
    public function getSource(): string
    {
        return $this->source;
    }

    
    public function withSource(string $source): static
    {
        $new = clone $this;
        $new->source = $source;

        return $new;
    }

    
    public function getSyncDomainID(): string
    {
        return $this->syncDomainID;
    }

    
    public function withSyncDomainID(string $syncDomainID): static
    {
        $new = clone $this;
        $new->syncDomainID = $syncDomainID;

        return $new;
    }

    
    public function getProtectFromManualChange(): bool
    {
        return $this->protectFromManualChange;
    }

    
    public function withProtectFromManualChange(bool $protectFromManualChange): static
    {
        $new = clone $this;
        $new->protectFromManualChange = $protectFromManualChange;

        return $new;
    }
}
