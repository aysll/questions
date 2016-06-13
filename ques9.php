<?php

// yalnız b class-ından istifadə edərək ekrana necə "Əla!" sözünü yazdıra yazdıra bilərəm?

class a {

     protected $b = 'Əla!';

     function b()
     {
        return $this->b;
     }
}

class b extends a {
	
	
}
$aclass = new a;
$aclass->b();
$bclass = new b;
$bclass->b();

?>