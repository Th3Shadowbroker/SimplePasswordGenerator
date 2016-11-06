<?php
/*
 * SIMPLE PASSWORD GENERATOR
 * @License CC 4.0 (https://creativecommons.org/licenses/by-sa/4.0/)
 * @Author Th3Shadowbroker (http://m4taiori.de)
 * @GitHub Th3Shadowbroker (https://github.com/Th3Shadowbroker)
 */

//Load requirements
require './objects/PasswordGenerator.php';

//Namespace import
use github\th3shadowbroker\PswdGen\PasswordGenerator as PasswordGenerator;

//Length and charset
$Length = 0;
$Charset = null;
$ResultType = 'json';

//Check for length
if ( isset( $_GET['length'] ) )
{
    
    $Length = $_GET['length'];
    
}
else
{
    
    $Length = 36;
    
}

//Check for charset
if ( isset( $_GET['charset'] ) )
{
    
    $Charset = $_GET['charset'];
    
}
else
{
    
    $Charset = null;
    
}

//Check for return type
if ( isset( $_GET['type'] ) )
{

    $ResultType = $_GET['type'];

}
else
{

    $ResultType = 'json';
    
}

switch ( $ResultType )
{
    
    case 'raw':
        echo PasswordGenerator::Generate( $Length, $Charset );
        break;
    
    case 'json':
        echo json_encode( [ 
                            'success' => true,
                            'result' => PasswordGenerator::Generate( $Length, $Charset ) 
                        ] );
        break;
    
    default:
        echo json_encode( [ 
                            'success' => false, 
                            'key' => 'type',
                            'message' => 'Type is given but invalid!'
                        ] );
        break;
    
}

?>