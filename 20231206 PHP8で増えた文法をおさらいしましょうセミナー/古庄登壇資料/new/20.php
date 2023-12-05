<?php
/* Random 拡張モジュール */
declare(strict_types=1);
error_reporting(-1);

// 引数はnullを指定した時も \Random\Engine\Secure になるが、学習用なのであえて指定
// 「暗号学的にセキュアな」乱数
$ran = new \Random\Randomizer(new \Random\Engine\Secure());

// ランダムなバイト列の作成
$str = $ran->getBytes(32);
var_dump(bin2hex($str));

// 入力文字列からランダムに文字列を作成
// XXX これは PHP8.3以降
$str = $ran->getBytesFromString('abcdefg', 16);
var_dump($str);

// ランダムに数値を取得
$i = $ran->getInt(0, 999);
var_dump($i);

// メルセンヌ・ツイスター アルゴリズムを実装したクラス
$ran = new \Random\Randomizer(new \Random\Engine\Mt19937());
$i = $ran->getInt(0, 999);
var_dump($i);

// Permuted congruential generator(PCG)(線形合同法の出力を加工することで統計的性質を改善したもの)を実装したクラス
$ran = new \Random\Randomizer(new \Random\Engine\PcgOneseq128XslRr64());
$i = $ran->getInt(0, 999);
var_dump($i);

