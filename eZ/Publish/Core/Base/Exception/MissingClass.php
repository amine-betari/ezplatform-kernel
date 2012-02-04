<?php
/**
 * Contains MissingClass Exception implementation
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\Base\Exception;
use Exception,
    LogicException;

/**
 * MissingClass Exception implementation
 *
 * Use:
 *   throw new MissingClass( $className, 'field type' );
 *
 */
class MissingClass extends LogicException implements \ezp\Base\Exception
{
    /**
     * Generates: Could not find[ {$classType}] class '{$className}'
     *
     * @param string $className
     * @param string|null $classType Optional string to specify what kind of class this is
     * @param \Exception|null $previous
     */
    public function __construct( $className, $classType = null, Exception $previous = null )
    {
        if ( $classType === null )
            parent::__construct( "Could not find class '{$className}'", 0, $previous );
        else
            parent::__construct( "Could not find {$classType} class '{$className}'", 0, $previous );
    }
}
