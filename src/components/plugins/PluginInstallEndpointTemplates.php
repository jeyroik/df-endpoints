<?php
namespace df\components\plugins;

use df\components\endpoints\templates\EndpointTemplate;
use df\interfaces\endpoints\templates\IEndpointTemplateRepository;
use extas\components\plugins\PluginInstallDefault;

/**
 * Class PluginInstallEndpointTemplates
 *
 * @package df\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallEndpointTemplates extends PluginInstallDefault
{
    protected $selfName = 'endpoint template';
    protected $selfSection = 'endpoint_templates';
    protected $selfUID = EndpointTemplate::FIELD__NAME;
    protected $selfItemClass = EndpointTemplate::class;
    protected $selfRepositoryClass = IEndpointTemplateRepository::class;
}
