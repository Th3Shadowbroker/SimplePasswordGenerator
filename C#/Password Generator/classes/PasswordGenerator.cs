/*
 * SIMPLE PASSWORD GENERATOR
 * @License CC 4.0 (https://creativecommons.org/licenses/by-sa/4.0/)
 * @Author Th3Shadowbroker (http://m4taiori.de)
 * @GitHub Th3Shadowbroker (https://github.com/Th3Shadowbroker)
 */

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace github.th3shadowbroker.PswdGen
{
    class PasswordGenerator
    {

        //Generate a password
        public static String Generate( int length = 36, char[] charset = null )
        {

            Random R = new Random();
            char[] UCharset = { 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0' };
            String Out = "";

            if ( charset != null )
            {
                UCharset = charset;
            }

            for ( int i = 0; i != length; i++ )
            {
                Out += UCharset[ R.Next( 0, UCharset.Length ) ];
            }

            return Out;

        }

    }
}
