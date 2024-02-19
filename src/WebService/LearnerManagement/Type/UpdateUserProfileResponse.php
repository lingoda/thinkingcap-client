<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateUserProfileResponse implements ResultInterface
{
    private ServiceResultOfString $UpdateUserProfileResult;

    
    public function getUpdateUserProfileResult(): ServiceResultOfString
    {
        return $this->UpdateUserProfileResult;
    }

    
    public function withUpdateUserProfileResult(ServiceResultOfString $UpdateUserProfileResult): static
    {
        $new = clone $this;
        $new->UpdateUserProfileResult = $UpdateUserProfileResult;

        return $new;
    }
}
