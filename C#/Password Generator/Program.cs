using github.th3shadowbroker.PswdGen;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Password_Generator
{
    class Program
    {
        static void Main(string[] args)
        {

            Console.Title = "Password-Generator: Demo";

            Regenerate: 

            Console.WriteLine( PasswordGenerator.Generate() );

            Console.ReadKey();

            Console.Clear();

            goto Regenerate;

        }
    }
}
