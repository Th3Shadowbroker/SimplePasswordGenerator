<?php
/*
 * SIMPLE PASSWORD GENERATOR
 * @License CC 4.0 (https://creativecommons.org/licenses/by-sa/4.0/)
 * @Author Th3Shadowbroker (http://m4taiori.de)
 * @GitHub Th3Shadowbroker (https://github.com/Th3Shadowbroker)
 */

namespace github\th3shadowbroker\PswdGen;

class PasswordGenerator 
{
    
    //Generate a password
    public static function Generate( $length = 36, $charset = null )
    {
        
        $sCharset = [];
        $Result = '';

        if ( $charset == null )
        {
            $sCharset = [ "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u","v","w","x","y","z", "1", "2", "3", "4", "5", "6","7", "8", "9","0" ];
        }
        else
        {
            $sCharset = $charset;
        }     
        
        for ( $i = 0; $i != $length; $i++ )
        {
            
            $Result .= $sCharset[ rand( 0 , sizeof( $sCharset ) - 1 ) ]; 
            
        }       

        return $Result;
        
    }
    
}
