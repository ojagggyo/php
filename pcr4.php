<?php
if($fp = fopen('https://toyokeizai.net/sp/visual/tko/covid19/csv/cases_total.csv','r')){
  echo "pcr4 ({csv:[";
  while ($line = fgets($fp)){
    $arrayList = preg_split("[,]",$line);
    $arrayList[1] = trim($arrayList[1]);
    echo "[\"$arrayList[0]\",\"$arrayList[1]\"],";
  }
  echo "]})";
  fclose($fp);
}else{
}
?>
