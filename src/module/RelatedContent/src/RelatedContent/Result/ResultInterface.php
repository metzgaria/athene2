<?php
/**
 * Athene2 - Advanced Learning Resources Manager
 *
 * @author      Aeneas Rekkas (aeneas.rekkas@serlo.org)
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link        https://github.com/serlo-org/athene2 for the canonical source repository
 */
namespace RelatedContent\Result;

use RelatedContent\Entity\TypeInterface;

interface ResultInterface
{
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @var TypeInterface $object
     * @return self
     */
    public function setObject(TypeInterface $object);

    /**
     * @return TypeInterface
     */
    public function getObject();

    /**
     * @return string
     */
    public function getType();

    /**
     * @return int
     */
    public function getId();
}
