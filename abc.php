<?php
function kampus($nilai_total) {
        if  ($nilai_total >= 85){
              return 'Sangat memuaskan';
        } elseif($nilai_total >= 70 ){
              return 'memuaskan';
        } elseif($nilai_total >= 56){
              return 'Cukup';
        } elseif($nilai_total >= 36){
              return 'Kurang';
        }elseif($nilai_total >= 0){
              return 'Sangat kurang';
          }
        }
?>