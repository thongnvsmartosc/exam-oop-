<?php
class MyCircle {
    private $radius;   // radius of the circle

    public function getRadius() { return $this->radius; }
  
    public function setRadius($radius) { $this->radius = $radius; }
 
    public function getArea($radius) {
       return  round($radius*$radius* pi(),2);
    }
    public function perimeter($radius) {
      return round($radius * 2 * pi(),2);
   }
 }
 // chuyen string sang float
 $Convert=array_map('floatval',$argv)[1];

 if(is_numeric($Convert) && $Convert>=0
 ){
  $cirle=new MyCircle();
  echo "Dien tich hinh tron: {$cirle->getArea($Convert)}\n";
  echo"Chu vi hinh tron: {$cirle->perimeter($Convert)}\n";
}
else if(is_numeric($Convert) && $Convert<0 ){
  echo "Ban kinh khong duoc am.Nhap lai ban kinh nhe!\n";

}
 else{
  echo "Nhap lai ban kinh nhe!\n";

  }
?>