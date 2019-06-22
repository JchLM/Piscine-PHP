<?php

  class NightsWatch
  {
      function fight(){
      }
      function recruit($q){
      	if (is_a($q, "JonSnow") || (is_a($q, "SamwellTarly"))){
      		return $q::fight();
      	}
      }
  }
?>