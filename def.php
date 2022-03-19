<?php
function posisi($nilai_total) {
    if ($nilai_total >= 85){
        return  'A';
      } elseif($nilai_total >= 70 ){
        return 'B';
      } elseif($nilai_total >= 56){
        return 'C';
      } elseif($nilai_total >= 36){
        return 'D';
      } elseif($nilai_total >= 0){
        return 'E';
        
    }
} 