<?php

/*
 * This file is part of the Arthur Doctrine Library.
 *
 * (c) Scribe Inc. <oss@scr.be>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Scribe\Doctrine\Exception;

/**
 * Class ORMAssociationException.
 */
class ORMAssociationException extends ORMException
{
    /**
     * @return string
     */
    public function getDefaultMessage()
    {
        return self::MSG_ORM_STATE_ASSOCIATION_GENERIC;
    }

    /**
     * @return int
     */
    public function getDefaultCode()
    {
        return self::CODE_ORM_STATE_ASSOCIATION_GENERIC;
    }
}

/* EOF */
