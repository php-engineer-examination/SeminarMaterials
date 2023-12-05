<?php
/* #[ は、コメントの開始として解釈されなくなりました */
declare(strict_types=1);
error_reporting(-1);

# [ だとOKです(#と[の間にスペースが入ってます
echo 'test';

#[ は、コメントの開始として解釈されなくなりました
echo 'test';
