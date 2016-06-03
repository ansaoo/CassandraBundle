<?php

namespace CassandraBundle\Cassandra\ORM\Mapping;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
final class Table extends Annotation
{
    /**
     * @var string
     */
    public $repositoryClass;

    /**
     * @var string
     */
    public $name;
}