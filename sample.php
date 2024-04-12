
<?php
$a = "Hello World";
echo $a;
?>

<?php
$age=20;
$test="テスト";
echo $age."\n";
echo $test."\n";
?>

<?php
$tan=[1,2,3];
echo $tan[0]."\n";

$nizi=[
    ["松下",29,"男性"],
    ["高田",25,'男性'],
    ["岡田",25,'女性']
];
echo "私の名前は",$nizi[0][0],"です。年齢は",$nizi[0][1],"歳",$nizi[0][2],"です。"."\n";

$ren=
[
    'name'=>'田中',
    'age'=>24,
    'codelang'=>"HTML"
];
echo $ren['name']."\n";
?>

<?php
$i=0;
echo $i."\n";
echo $i++."\n";
echo $i."\n";
echo ++$i."\n";
?>

<?php
for($i=1; $i<15 ; $i++){
    if($i%14===0){
        echo "for_out"."\n";
        break;
    }
    if($i%2===0){
        continue;
    }
    echo $i."\n";
    
}
?>