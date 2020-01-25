<?php
namespace df\components\endpoints\templates;

use df\interfaces\endpoints\templates\IEndpointTemplate;
use extas\components\Item;
use extas\components\parameters\THasParameters;
use extas\components\THasDescription;
use extas\components\THasName;

/**
 * Class EndpointTemplate
 *
 * @package df\components\endpoints\templates
 * @author jeyroik@gmail.com
 */
class EndpointTemplate extends Item implements IEndpointTemplate
{
    use THasName;
    use THasDescription;
    use THasParameters;

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
