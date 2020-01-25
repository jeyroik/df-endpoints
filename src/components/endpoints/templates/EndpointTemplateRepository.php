<?php
namespace df\components\endpoints\templates;

use df\interfaces\endpoints\templates\IEndpointTemplateRepository;
use extas\components\repositories\Repository;

/**
 * Class EndpointTemplateRepository
 *
 * @package df\components\endpoints\templates
 * @author jeyroik@gmail.com
 */
class EndpointTemplateRepository extends Repository implements IEndpointTemplateRepository
{
    protected $scope = 'df';
    protected $name = 'endpoint_templates';
    protected $pk = EndpointTemplate::FIELD__NAME;
    protected $idAs = '';
    protected $itemClass = EndpointTemplate::class;
}
