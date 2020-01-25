<?php
namespace df\interfaces\endpoints;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use extas\interfaces\parameters\IHasParameters;
use extas\interfaces\templates\IHasTemplate;

/**
 * Interface IEndpoint
 *
 * @package df\interfaces\endpoints
 * @author jeyroik@gmail.com
 */
interface IEndpoint extends IItem, IHasName, IHasDescription, IHasParameters, IHasTemplate
{
    const SUBJECT = 'df.endpoint';
}
