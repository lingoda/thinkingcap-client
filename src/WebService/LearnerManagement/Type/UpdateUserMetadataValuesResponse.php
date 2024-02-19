<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateUserMetadataValuesResponse implements ResultInterface
{
    private ServiceResultOfString $UpdateUserMetadataValuesResult;

    public function getUpdateUserMetadataValuesResult(): ServiceResultOfString
    {
        return $this->UpdateUserMetadataValuesResult;
    }

    public function withUpdateUserMetadataValuesResult(ServiceResultOfString $UpdateUserMetadataValuesResult): static
    {
        $new = clone $this;
        $new->UpdateUserMetadataValuesResult = $UpdateUserMetadataValuesResult;

        return $new;
    }
}
