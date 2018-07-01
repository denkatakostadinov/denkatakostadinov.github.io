<?php
// connect and login to FTP server
$ftp_server = "192.168.0.10";
$ftp_username = "pi";
$ftp_userpass = "raspberry";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$file = "test.txt";

//echo "Current user is: " . get_current_user();
//echo "Command output is " . shell_exec("/bin/bash /home/pi/scriptstart.sh 2>&1");

//shell_exec('/usr/bin/ssh pi@192.168.0.10 -X omxplayer https://r8---sn-8pgbpohxqp5-h5oz.googlevideo.com/videoplayback?expire=1526447418&sparams=dur%2Cei%2Cid%2Cinitcwndbps%2Cip%2Cipbits%2Citag%2Clmt%2Cmime%2Cmm%2Cmn%2Cms%2Cmv%2Cpcm2cms%2Cpl%2Cratebypass%2Crequiressl%2Csource%2Cexpire&key=yt6&mime=video%2Fmp4&initcwndbps=1970000&ipbits=0&pcm2cms=yes&fvip=4&ratebypass=yes&itag=22&mt=1526425739&requiressl=yes&c=WEB&signature=6F6FB9973F6B89053000A1C22D9204EC69016012.AAD6F2011BE3D6D93F43763B1230DA72AE950EC6&id=o-AAw7QJaQq9SrCiMEjDp_165PQdEEbpo77ig4ofe2ohn6&mn=sn-8pgbpohxqp5-h5oz%2Csn-aigzrn7l&mm=31%2C29&ms=au%2Crdu&ei=2Wj7WrXzOY29VuiZmsAK&mv=m&source=youtube&pl=22&dur=78.738&lmt=1471534132456343&ip=80.192.205.249 2>$1');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = rand(5,50);
fwrite($myfile, $txt);

//$output = shell_exec('whoami');

//$output = shell_exec('sudo bash /home/pi/startChrome.sh');
//echo "$output";
//if (!$output) {
//echo "Error";
//}
//else {
//echo "good";
//}
// upload file
if (ftp_put($ftp_conn, rand(5,50), $file, FTP_ASCII))
  {
//  shell_exec('bash /home/pi/scriptstart.sh');
  echo "Successfully uploaded $file";
header("Location: http://192.168.0.7/upload.php");

  }
else
  {
  echo "Error uploading $file.";
  }


// close connection
ftp_close($ftp_conn);
?>

