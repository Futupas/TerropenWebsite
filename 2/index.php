<?php
// function IsMobile(){
//   $pda_patterns = array(
//     'MIDP','FLY-','MMP','Mobile','MOT-',
//     'Nokia','Obigo','Panasonic','PPC',
//     'ReqwirelessWeb','Samsung','SEC-SGH',
//     'Smartphone','SonyEricsson','Symbian',
//     'WAP Browser','j2me','BREW', 'iPod', 'iPhone'
//   );
//   $agent = $_SERVER['HTTP_USER_AGENT'];
//   $user_agent = strtolower($agent);
//   foreach($pda_patterns as $val){
//     $val = strtolower($val);
//     if(strpos($user_agent, $val) !== false){ return true; }
//   }
//   return false;
// }
function IsMobile(){
  //$pda_patterns = array('Mobile', 'iPod', 'iPhone');
  $pda_patterns = array('Mobile');
  $agent = $_SERVER['HTTP_USER_AGENT'];
  $user_agent = strtolower($agent);
  foreach($pda_patterns as $val){
    $val = strtolower($val);
    if(strpos($user_agent, $val) !== false){ return true; }
  }
  return false;
}

if (IsMobile()) {
    echo file_get_contents('./mobile.html', FILE_USE_INCLUDE_PATH);
} else {
    echo file_get_contents('./desktop.html', FILE_USE_INCLUDE_PATH);
}

?>