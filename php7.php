<?php
    //toan tu
    echo "hello world"."</br>";
    $a= ($_GET['haha']) ?? 'ok';
    echo $a;

    $b=5;
    $c=10;
    $result=$b<=>$c;
    echo "</br>".$result."</br>";

    //define array
    define ("INFO",[
        'DOMAIN'=>'thinhlam.net ',
        "AUTHOR"=>'thinh '
    ]);
    echo INFO['DOMAIN'];
    echo INFO['AUTHOR'];
    echo "</br>";
    $animals=new class {
        function an($eat){
            echo $eat;
        }
    };
    $animals->an("con heo dang an ");

    //anonymous class
    class animal{
        function an($eat){
            echo "con vat dang an".$eat;
        }
    }
    echo "</br>";
    $dog=new class extends animal{
        function an($eat){
            echo "con cho dang an ".$eat;
        }
    };

    $dog->an("cut");
    echo "</br>";

    //anonymous class
    class dong_xe{
        public $loai_xe;
        function set_loaixe($loai_xe){
            $this->loai_xe=$loai_xe;
        }
    }

    $hang_xe=new dong_xe();
    $hang_xe->set_loaixe(new class{
        function ten_dong_xe($a){
            echo $a;
        }
    });

    $hang_xe->loai_xe->ten_dong_xe("day la dong xe sh");
    echo '</br>';

    //$closure::call();
    class sinh_vien{
        public $name="lamvietthinh";
        function di_hoc(){
            echo "hom nay hoc mon anh";
        }
    }
    $closure=function(){
        return $this->name;
    };

    echo $closure->call(new sinh_vien());
    $mon_hoc=function(){
        return $this->di_hoc();
    };
    $viet_thinh=new sinh_vien();
    echo $mon_hoc->call($viet_thinh,'sinh_vien');
    echo "</br>";

    //ham random_int() va random_bytes
    $bytes=random_bytes(10);
    echo $bytes;
    echo "</br>".bin2hex($bytes);