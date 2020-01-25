<?php
namespace df\components\plugins;

use df\components\endpoints\Endpoint;
use df\interfaces\endpoints\IEndpointRepository;
use extas\components\plugins\PluginInstallDefault;

/**
 * Class PluginInstallEndpoints
 *
 * @package df\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallEndpoints extends PluginInstallDefault
{
    protected $selfRepositoryClass = IEndpointRepository::class;
    protected $selfItemClass = Endpoint::class;
    protected $selfUID = Endpoint::FIELD__NAME;
    protected $selfSection = 'endpoints';
    protected $selfName = 'endpoint';
}
