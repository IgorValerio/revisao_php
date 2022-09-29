<? php 
namespace  Vendor \ Package ;

use  FooInterface;
use  BarClass  como  Bar;
use  OtherVendor \ OtherPackage \ BazClass;

classe  Foo  extends  Bar  implementa  FooInterface
{
    public  function  sampleMethod ($a , $b = null)
    {
        if ($a === $b) {
            bar ();
        } elseif ($a > $b) {
            $foo -> bar ($arg1);
        } else {
            BazClass :: bar ($arg2 , $arg3);
        }
    }

     barra de função estática pública  final ()  
    {
        // corpo do método
    }
}