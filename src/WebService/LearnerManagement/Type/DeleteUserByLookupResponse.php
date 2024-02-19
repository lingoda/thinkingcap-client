<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteUserByLookupResponse implements ResultInterface
{
    private ServiceResultOfString $DeleteUserByLookupResult;

    
    public function getDeleteUserByLookupResult(): ServiceResultOfString
    {
        return $this->DeleteUserByLookupResult;
    }

    
    public function withDeleteUserByLookupResult(ServiceResultOfString $DeleteUserByLookupResult): static
    {
        $new = clone $this;
        $new->DeleteUserByLookupResult = $DeleteUserByLookupResult;

        return $new;
    }
}
