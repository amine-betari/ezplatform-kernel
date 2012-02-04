<?php
/**
 * Contains PropertyNull Exception implementation
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\Base\Exception;
use eZ\Publish\API\Repository\Exceptions\InvalidArgumentException,
    Exception;

/**
 * PropertyNull Exception implementation
 *
 * Use:
 *   throw new PropertyNull( 'nodeId', __CLASS__ );
 *
 */
class PropertyNull extends InvalidArgumentException
{
    /**
     * Generates: Property '{$propertyName}' did not have a value[ on class '{$className}']
     *
     * @param string $propertyName
     * @param string|null $className Optionally to specify class in abstract/parent classes
     * @param \Exception|null $previous
     */
    public function __construct( $propertyName, $className = null, Exception $previous = null )
    {
        if ( $className === null )
            parent::__construct( "Property '{$propertyName}' did not have a value", 0, $previous );
        else
            parent::__construct( "Property '{$propertyName}' did not have a value on class '{$className}'", 0, $previous );
    }
}
