<?PHP

$db_host = "localhost";
$db_user = "root";
$db_password = "kikiecho";
$db_name = "stormweaver";

$rate = 60;

$use_proration = 1;
$use_quote = 0;

$db = mysql_connect($db_host, $db_user, $db_password);
if (! $db) {die("Database not available");}
mysql_select_db($db_name) || die("Database not available");

$id = (int) $_REQUEST['id'];
if (! $id) { $id = 1;}

$res = mysql_query("SELECT * FROM invoice WHERE invoice_id = $id");
if (! $res) {die(mysql_error());}
$row = mysql_fetch_array($res);

$invoice_num = (int) $id;
$long = $row['long_type'];
$invoice_date = $row['invoice_date'];
$summary = $row['summary'];
$start_date = date("n/j/Y",strtotime($row['start_date']));
$end_date = date("n/j/Y",strtotime($row['end_date']));
$client_id = (int) $row['client_id'];

$res = mysql_query("SELECT * FROM client WHERE client_id = '$client_id'");
if (! $res) {die(mysql_error());}
$row = mysql_fetch_array($res);

$client_name = htmlspecialchars($row['name']);
$client_address = htmlspecialchars($row['address']);
$client_address2 = htmlspecialchars($row['address2']);
$client_city = htmlspecialchars($row['city']);
$client_phone = htmlspecialchars($row['phone']);
$client_email = htmlspecialchars($row['email']);

$signs = array("odd","even");

$res = mysql_query("SELECT * FROM invoice_section WHERE invoice_id = '$id' ORDER BY sortnum");
if (! $res) {die(mysql_error());}
$tothours = 0;
$totbilled = 0;
$totcost = 0;
$sign = 0;
while ($row = mysql_fetch_array($res)) {
  $section_id = $row['section_id'];
  $frac = 1-$row['proration']/100;
  $section[$section_id]['sign'] = $signs[$sign];
  $section[$section_id]['title'] = htmlspecialchars($row['title']);
  $section[$section_id]['body'] = htmlspecialchars($row['body']);
  $res2 = mysql_query("SELECT * FROM invoice_line WHERE section_id='$section_id' ORDER BY line_date");
  $section[$section_id]['quoted'] = round($row['quoted']/60,1);
  if ($row['quoted'] == 0) {$section[$section_id]['quoted'] = "-";}
  else {$use_quote = 1;}
  $section[$section_id]['proration'] = $row['proration']."%";
  if ($row['proration']==0) { $section[$section_id]['proration'] = "-";}
  if (! $res2) {die(mysql_error());}
  $subhours = 0;
  $subbilled = 0;
  $subcost = 0;
  $sign2 = 0;
  while ($row2 = mysql_fetch_array($res2)) {
    $line_id = $row2['line_id'];
    $l = array();
    $l['date'] = date("n/j",strtotime($row2['line_date']));
    $l['description'] = htmlspecialchars($row2['description']);
    $l['hours'] = round($row2['minutes']/60,1);
    $l['billed'] = round($frac*$row2['minutes']/60,1);
    if ($rate) { 
      $hourly = true;
      $l['cost'] = round($rate * $frac * $row2['minutes']/60);
    } else {
      $hourly = false;
      $l['cost'] = $row2['cost'];
    }
    $l['sign'] = $signs[$sign2];
    $section[$section_id]['lines'][$line_id] = $l;
    $subhours += $l['hours'];
    $subbilled += $l['billed'];
    $subcost += $l['cost'];
    $sign2 = 1-$sign2;
  }
  $section[$section_id]['hours'] = $subhours;
  $section[$section_id]['billed'] = $subbilled;
  $section[$section_id]['cost'] = $subcost;
  $tothours += $subhours;
  $totbilled += $subbilled;
  $totcost += $subcost;
  $sign = 1-$sign;
}

$res = mysql_query("SELECT start_date, end_date, title, description, minutes_billed, minutes_quoted, rate, cost  FROM invoice_main_line WHERE invoice_id='$id' ORDER BY start_date ASC");
if (! $res) {die(mysql_error());}
$lines = array();
$sign2 = 0;
while ($row2 = mysql_fetch_array($res)) {
    $l = array();
    $l['start_date'] = date("n/j",strtotime($row2['start_date']));
    $l['end_date'] = date("n/j",strtotime($row2['end_date']));
    if ($l['start_date']==$l['end_date']) {
      $l['date'] = $l['end_date'];
    } else {
      $l['date'] = $l['start_date']."-".$l['end_date'];
    }
    $l['title'] = htmlspecialchars($row2['title']);
    $l['description'] = htmlspecialchars($row2['description']);
    $l['billed'] = round($row2['minutes_billed']/60,1);
    $l['quoted'] = round($row2['minutes_quoted']/60,1);
    if (! $l['quoted']) {
      $l['quoted'] = "-";
    } else {
       $use_quote = 1;
    }
    $l['rate'] = $row2['rate'];
    if ($l['rate']>0) {
      $l['cost'] = round($l['rate'] * $row2['minutes_billed']/60);
      $hourly = true;
    } else {
      $l['cost'] = $row2['cost'];
      $hourly = false;
    }
    $l['sign'] = $signs[$sign2];
    $tothours += $l['billed'];
    $totbilled += $l['billed'];
    $totcost += $l['cost'];
    $sign2 = 1-$sign2;
    $lines[] = $l;
}

