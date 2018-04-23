<?php
namespace Common\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class AbstractAPIAwareActionController extends AbstractActionController
{
    protected function setupAPI()
    {
        $fullWidth = is_string($this->params()->fromQuery('full-width'));
        $hideDiscussions = is_string($this->params()->fromQuery('hide-discussions'));
        $hideFooter = is_string($this->params()->fromQuery('hide-discussions'));
        $hideHeader = is_string($this->params()->fromQuery('hide-header'));
        $hideHorizon = is_string($this->params()->fromQuery('hide-horizon'));
        $hideNav = is_string($this->params()->fromQuery('hide-nav'));
        $hideSidebar = is_string($this->params()->fromQuery('hide-sidebar'));
        $contentOnly = is_string($this->params()->fromQuery('content-only'));

        $this->layout()->fullWidth = $fullWidth || $contentOnly;
        $this->layout()->hideDiscussions = $hideDiscussions || $contentOnly;
        $this->layout()->hideFooter = $hideFooter || $contentOnly;
        $this->layout()->hideHeader = $hideHeader || $contentOnly;
        $this->layout()->hideHorizon = $hideHorizon || $contentOnly;
        $this->layout()->hideNav = $hideNav || $contentOnly;
        $this->layout()->hideSidebar = $hideSidebar || $contentOnly;
    }
}
