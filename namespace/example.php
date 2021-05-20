<?php
namespace greeting\en;
class Hi{
    function __construct(){
        echo "hi";
    }
}

namespace greeting\ko;
class Hi{
    function __construct(){
        echo "안녕";
    }
}
use \greeting\en\Hi as HiEn;
use \greeting\ko\Hi as HiKo;
// new \en\Hi();
// new \ko\Hi();
new HiEn();
new HiKo();
?>