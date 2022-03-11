<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateUserMetadataValuesResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $UpdateUserMetadataValuesResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getUpdateUserMetadataValuesResult()
    {
        return $this->UpdateUserMetadataValuesResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $UpdateUserMetadataValuesResult
     *
     * @return UpdateUserMetadataValuesResponse
     */
    public function withUpdateUserMetadataValuesResult($UpdateUserMetadataValuesResult)
    {
        $new = clone $this;
        $new->UpdateUserMetadataValuesResult = $UpdateUserMetadataValuesResult;

        return $new;
    }
}
