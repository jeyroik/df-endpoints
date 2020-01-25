<?php
namespace df\components\endpoints;

use df\interfaces\endpoints\IEndpointRepository;
use extas\components\repositories\Repository;

/**
 * Class EndpointRepository
 *
 * @package df\components\endpoints
 * @author jeyroik@gmail.com
 */
class EndpointRepository extends Repository implements IEndpointRepository
{
    protected $itemClass = Endpoint::class;
    protected $idAs = '';
    protected $pk = Endpoint::FIELD__NAME;
    protected $name = 'endpoints';
    protected $scope = 'df';
}
