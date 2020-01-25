<?php
namespace df\components\endpoints;

use df\interfaces\endpoints\IEndpoint;
use df\interfaces\endpoints\templates\IEndpointTemplateRepository;
use extas\components\Item;
use extas\components\parameters\THasParameters;
use extas\components\SystemContainer;
use extas\components\templates\THasTemplate;
use extas\components\THasDescription;
use extas\components\THasName;

/**
 * Class Endpoint
 *
 * @package df\components\endpoints
 * @author jeyroik@gmail.com
 */
class Endpoint extends Item implements IEndpoint
{
    use THasName;
    use THasDescription;
    use THasParameters;
    use THasTemplate;

    /**
     * @return \extas\interfaces\repositories\IRepository|mixed
     */
    public function getTemplateRepository()
    {
        return SystemContainer::getItem(IEndpointTemplateRepository::class);
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
