/*
 * SIMPLE PASSWORD GENERATOR
 * @License CC 4.0 (https://creativecommons.org/licenses/by-sa/4.0/)
 * @Author Th3Shadowbroker (http://m4taiori.de)
 * @GitHub Th3Shadowbroker (https://github.com/Th3Shadowbroker)
 */

package github.th3shadowbroker.PswdGen;

import java.util.Random;

public class PasswordGenerator 
{
    
    //Create a password
    public static String Generate( int length )
    {
     
        char[] charset = { 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u','v','w','x','y','z', '1', '2', '3', '4', '5', '6','7', '8', '9','0' };
        
        String tmp = "";
        
        Random rnd = new Random();
        
        for ( int i = 0; i != length; i++ )
        {
            
            tmp += charset[ rnd.nextInt( charset.length - 1 ) ];
            
        }
        
        return tmp;
        
    }
    
    //Create a password based on a custom charset
    public static String Generate( char[] charset, int length )
    {
        
        String tmp = "";
        
        Random rnd = new Random();
        
        for ( int i = 0; i != length; i++ )
        {
            
            tmp += charset[ rnd.nextInt( charset.length - 1 ) ];
            
        }
        
        return tmp; 
        
    }
    
}
