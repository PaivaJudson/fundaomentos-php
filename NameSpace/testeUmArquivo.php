<?php

namespace NameSpaceX{
    class ClasseTeste{
        public function oi(){
            echo "<h1>NameSpace X</h1>";
        }
    }
}

namespace NameSpaceY {
    class ClasseTeste
    {
        public function oi()
        {
            echo "<h1>NameSpace Y</h1>";
        }
    }
}

namespace {
    use NameSpaceX\ClasseTeste;

    $c = new ClasseTeste();

    $c -> oi();
}