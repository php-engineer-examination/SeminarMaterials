<?php
/* 三項演算子をネストする場合、明示的に括弧が必要になりました */
declare(strict_types=1);
error_reporting(-1);

// PHP8以降は「Fatal error」となるい
$num = true ? 1 : true ? 2 : true ? 3 : 4;
var_dump($num);

// 多くの「他の言語」の解決順番
$num = true ? 1 : (true ? 2 : (true ? 3 : 4));
var_dump($num);

// PHP7までの解決順番
$num = ((true ? 1 : true) ? 2 : true) ? 3 : 4;
var_dump($num);

/*
// C言語のサンプル
#include <stdio.h>
#include <stdbool.h>
int main(void){
    int num;
    num = true ? 1 : true ? 2 : true ? 3 : 4;
    printf("%d\n", num);
}
*/
/*
// Javaのサンプル
public class Main {
    public static void main(String[] args) throws Exception {
        // Your code here!
        int num = true ? 1 : true ? 2 : true ? 3 : 4;
        System.out.println(num);
    }
}
*/
/*
# Rubyのサンプル
num = true ? 1 : true ? 2 : true ? 3 : 4
puts(num)
*/
