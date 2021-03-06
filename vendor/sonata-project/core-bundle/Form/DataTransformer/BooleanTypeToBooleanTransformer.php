<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CoreBundle\Form\DataTransformer;

use Sonata\CoreBundle\Form\Type\BooleanType;
use Symfony\Component\Form\DataTransformerInterface;

class BooleanTypeToBooleanTransformer implements DataTransformerInterface
{
    /**
     * {@inheritdoc}
     */
    public function transform($value)
    {
        if (true === $value or BooleanType::TYPE_YES === (int) $value) {
            return BooleanType::TYPE_YES;
        }

        return BooleanType::TYPE_NO;
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform($value)
    {
        if (BooleanType::TYPE_YES === $value) {
            return true;
        }

        return false;
    }
}
