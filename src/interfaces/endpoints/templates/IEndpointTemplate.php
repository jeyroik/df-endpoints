<?php
namespace df\interfaces\endpoints\templates;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use extas\interfaces\parameters\IHasParameters;

/**
 * Interface IEndpointTemplate
 *
 * @package extas\interfaces\endpoints\templates
 * @author jeyroik@gmail.com
 */
interface IEndpointTemplate extends IItem, IHasName, IHasDescription, IHasParameters
{
    const SUBJECT = 'df.endpoint.template';
}
