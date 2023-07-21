<?php

declare(strict_types=1);

namespace Passionweb\Factories\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class FactoryController extends ActionController
{
    protected array $extConf;
    protected array $customLanguages;

    public function __construct(
        array $extConf,
        array $customLanguages
    )
    {
        $this->extConf = $extConf;
        $this->customLanguages = $customLanguages;
    }

    public function exampleAction(): ResponseInterface
    {
        // use the data of the factories for your logic here

        $this->view->assign('extConfCustomKey', $this->extConf['customKey']);
        $this->view->assign('customLanguages', $this->customLanguages);
        return $this->htmlResponse();
    }
}
