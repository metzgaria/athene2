<?php
/**
 * Athene2 - Advanced Learning Resources Manager
 *
 * @author    Benjamin Knorr (benjamin@serlo.org)
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      https://github.com/serlo-org/athene2 for the canonical source repository
 */
namespace Navigation\Form;

use Common\Form\Element\CsrfToken;
use Zend\Form\Element\Submit;
use Zend\Form\Form;

class CreatePageForm extends Form
{
    function __construct()
    {
        parent::__construct('create-page');
        $this->setAttribute('method', 'post');

        $this->add(new CsrfToken('csrf'));

        $this->add(
            (new Submit('submit'))->setValue('Create Page')->setAttribute('class', 'btn btn-success pull-right')
        );
    }
}