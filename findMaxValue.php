<?php
$arr = [[1,3,4],[1,5,3],[5,6,4]];
$index1=0;
$index2=0;
function findMaxNumber($arr){
    $max = $arr[0][0] ;
    // $list_min_value=[];
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[$i]);$j++){
            if($arr[$i][$j] > $max){
                $max = $arr[$i][$j];
                $index1=$i;
                $index2=$j;
            }
        }
    }
    echo "Gia tri lon nhat trong mang la:"." ". $max."<br/>"."tai vi tri:".$index1.$index2;
}
findMaxNumber($arr);
?>