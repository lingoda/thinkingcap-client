<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateStudentSupervisorsResponse implements ResultInterface
{
    private ?ServiceResultOfString $UpdateStudentSupervisorsResult = null;

    public function getUpdateStudentSupervisorsResult(): ?ServiceResultOfString
    {
        return $this->UpdateStudentSupervisorsResult;
    }

    public function withUpdateStudentSupervisorsResult(?ServiceResultOfString $UpdateStudentSupervisorsResult): static
    {
        $new = clone $this;
        $new->UpdateStudentSupervisorsResult = $UpdateStudentSupervisorsResult;

        return $new;
    }

    public function ensureUpdateStudentSupervisorsResult(): ServiceResultOfString
    {
        return $this->UpdateStudentSupervisorsResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'UpdateStudentSupervisorsResult');
    }
}
