
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

<?php
    class Company
    {
        protected $name;
        protected $address;
        protected $tel;

        public function displayCompany(){
            echo "会社名：".$this -> name."\n";
            echo "住所：".$this -> address."\n";
            echo "電話番号：".$this -> tel."\n";
        }
        public function getCompany($name,$address,$tel){
            $this -> name = $name;
            $this -> address = $address;
            $this -> tel = $tel;
        }

    }
    class Department extends Company
    {
        private $department;
        private $departmentname;

        public function displayDepartment(){
            echo "部署名：".$this -> department."\n";
            echo "部長：" .$this -> departmentname."\n"."\n";
        }
        public function getDepartment($department,$departmentname){
            $this->department=$department;
            $this->departmentname=$departmentname;
        }

    }

    $kaisyaA = new Department();
    $kaisyaB = new Department();
    $kaisyaC = new Department();

    $kaisyaA -> getCompany("サンプルA","市ヶ谷","080-XXX-xXX");
    $kaisyaB -> getCompany("サンプルB","池袋","090-XXX-xXX");
    $kaisyaC -> getCompany("サンプルC","新宿","070-XXX-xXX");   
    $kaisyaA -> getDepartment("人事","高田");
    $kaisyaB -> getDepartment("総務","田中");
    $kaisyaC -> getDepartment("営業","髙橋");

    $kaisyas = [$kaisyaA,$kaisyaB,$kaisyaC];

    /**
     * $kaisyaA=[ $name => 'サンプルA' , $addres => "市ヶ谷", $tel=>"080-XXX-xXX",$department=>"人事",$departmentname=>"高田"]
     */
    foreach($kaisyas as $value){
        $value->displayCompany();
        $value->displayDepartment();

        }

?>