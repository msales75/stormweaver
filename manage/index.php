<?PHP $_REQUEST['id'] = 267; 
require "index_inc.php" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stormweaver Programming &amp; Consulting - Invoice #<?PHP print $invoice_num ?></title>
<link href="style.css" rel="stylesheet" type="text/css" />

<style type="text/css">

body {
  margin: 0;
  text-align: center;
  font-family: helvetica, arial, sans-serif;
  font-size: 100%; 
}

p, h1, h2, h3, h4, h5, hr, ul , div, img, span, li {
margin: 0;
padding: 0;
border: 0;
}

.total {
  background-color: #FDF;
}

.odd {
  background-color: #EFF;
}
.even {
  background-color: #DDF;
}

table {
  width: 100%;
  border-width: 0.0063in;
  border-spacing: 0;
  font-size: 10pt;
  border-style: solid;
  border-color: blue;
  /* border-collapse: collapse; */
}

table th {
  border-width: 0.0063in;
  padding: 0.03in;
  border-style: solid;
  border-color: blue;
}
table td {
  border-width: 0.0063in;
  padding: 0.03in;
  border-style: solid;
  border-color: blue;
}

.line_date {
  width: 15%;
}
/* Used to be 60% w/o line_rate */
.line_description {
width: 45%;
}

td.line_description {
 padding: 4px;
 text-align: left;
}
.line_quoted {
width: 10%;
}
.line_hours {
width: 10%;
}
.line_billed {
width: 10%;
}
.line_rate {
width: 10%;
}
/* Used to be 10% */
.line_cost {
width: 10%;
text-align: right;
padding-right: 0.15in;
}

#period {
  text-align: center;
}

.section_category {
  width: 40%;
}

.section_quoted {
width: 12.5%;
}

.section_hours {
width: 12.5%;
}

.section_billed {
width: 12.5%;
}

.section_prorate {
width: 12.5%;
}

.section_cost {
width: 12.5%;
text-align: right;
padding-right: 0.15in;
}

#wrapper {
  text-align: left;
  position: relative;
}

#logo {
  position: absolute;
  margin-top: 0.4in; 
  margin-left: 0.6in;
}

#logo img {
  height: 1.4in;
  margin: 0;
}

#footer {
  margin-left: 2.0in;
  font-size: 8pt;
  text-align: right;
  color: #25A;
  width: 5in;
}

#banner {
  position: absolute;
  margin-top: 0;
  margin-left: 2.0in;
  min-width: 6.5in;
}

#banner img {
  height: 0.375in;
  margin: 0;
}

.bottom_line {
  width: 6.00in;
  height: 0.035in;
  background-color: #05A;
  z-index: -1;
}

#line {
  position: absolute;
  margin-top: 1.02in;
  margin-left: 0.1in; 
  width: 6.45in;
  height: 0.035in;
  background-color: #05A;
  z-index: -1;
}

h1 {
  position: absolute;
  margin-left: 3.3in;
  margin-top: 0.40in;
  vertical-align: top;
  font-size: 36pt;
  line-height: 100%;
  color: #DDF;
}

.date {
  position: absolute;
  margin-top: 1.2in;
  margin-left: 5.5in;
  width: 2in;
  font-size: 14pt;
  color: #05A;
  text-align: right;
}

h2 {
  position: absolute;
  margin-top: 0.5in;
  margin-left: 6.5in;
  width: 1.0in;
  text-align: right;
  margin-right: 0.5in;
  font-size: 24pt;
  font-weight: bold;
  color: #05A;
  padding: 0;
}

h3 {
  padding-top: 0.0in;
  padding-left: 0.0in;
  font-size: 18pt;
  font-weight: bold;
  color: #000;
  padding-bottom: 0.1in;
}

h4 {
  padding-top: 0.18in;
  padding-bottom: 0.05in;
  padding-left: 0.3in;
  font-size: 14pt;
  color: #05A;
}

h5 {
  padding-left: 0.5in;
  font-size: 10pt;
  color: #000;
  padding-bottom: 0.05in;
}

#space {
  padding: 0;
  margin: 0;
  width: 6in;
  height: 3.2in;
}

#content {
  margin-left: 1.0in;
  width: 6.5in;
  padding-bottom: 0.25in;
}

.section {
  /* margin-top: 0.15in; */
  text-align: center;
  border-style: solid;
  border-width: 0.0125in;
  border-color: #05A;
  background-color: #DDF;
  width: 100%;
}

ul.total {
  font-size: 14pt;
  color: #000;
  padding-top: 0.1in;
  padding-left: 0.0in;
  text-align: center;
  background-color: #FFF;
}
ul.total li {
  list-style-type: none;
  font-weight: bold;
}

ul.label {
  position: absolute;
  margin-top: 2.0in;
  margin-left: 1.0in;
  width: 2.0in;
  text-align: center;
}
ul.label li {
  list-style-type: none;
  font-weight: bold;
  font-size: 10pt;
  color: #25A;
}

ul.client {
  position: absolute;
  border-style: solid;
  border-width: 0.025in;
  border-color: #05A;
  background-color: #DDF;
  padding-top: 0.14in;
  padding-bottom: 0.14in;
  padding-left: 0;
  padding-right: 0;
  margin-top: 1.8in;
  margin-left: 4.5in;
  text-align: center;
  width: 3.0in;
}

ul.client li {
  list-style-type: none;
  font-weight: bold;
  font-size: 10pt;
  color: #000;
}


</style>

</head>
<body>
<div id="wrapper">

<div id="line"></div>
<div id="logo"><img alt="logo" src="logo.gif" /></div>
<div id="banner"><img alt="gradient" src="grad-corner.gif" /><img alt="gradient" src="gradient.gif" /> </div>

<h1>INVOICE</h1>
<h2>#<?PHP print $invoice_num ?></h2>
<div class="date"><?PHP print $invoice_date ?></div>

<ul class="label">
<li>Mark A. Sales, Ph.D.</li>
<li>512 Kearney St #4</li>
<li>El Cerrito, CA 94530</li>
<li>(510) 932-9724</li>
<li>dr.mark.sales@gmail.com</li>
<li>http://stormweaver.com</li>
</ul>

<ul class="client">
<li><?PHP print $client_name ?></li>
<li><?PHP print $client_address ?></li>
<li><?PHP print $client_address2 ?></li>
<li><?PHP print $client_city ?></li>
<li><?PHP print $client_phone ?></li>
<li><?PHP print $client_email ?></li>
</ul>

<div id="space"></div>

<div id="content">


<?PHP if ($start_date) {?><h4 id="period">Invoice Period: <?PHP print $start_date ?> - <?PHP print $end_date ?></h4><?PHP } ?>

<?PHP if ($long) { ?>
<!-- Summary here -->
<h3>Overview</h3>
<div class="bottom_line"></div>

<ul class="total">
<li>TOTAL COST: $<?PHP print $totcost ?></li>
<li>Prev. Payments: $0</li>
<li>AMOUNT DUE: $<?PHP print $totcost ?></li>
</ul>

<br />
<?PHP if ($summary) {?><h5><?PHP print $summary ?></h5><?PHP } ?>
<br />
<div class="section">

<table>
<tr>
<th class='section_category'>Category</th>
<?PHP if ($use_quote) { ?>
<th class='section_quoted'>Quoted Hours</th>
<?PHP } ?>
<?PHP if ($hourly) { ?>
<th class='section_hours'>Hours Labor</th>
<?PHP } ?>
<?PHP if ($use_proration) { ?>
<th class='section_prorate'>Proration</th>
<?PHP } ?>
<th class='section_billed'>Billed Hours</th>
<th class='section_cost'>Cost</th>
</tr>
<?PHP foreach ($section as $s) { ?>
<tr>
<td class='section_category <?PHP print $s['sign'] ?>'><?PHP print  $s['title'] ?></td>
<?PHP if ($use_quote) { ?>
<td class='section_quoted <?PHP print $s['sign'] ?>'><?PHP print  $s['quoted'] ?></td>
<?PHP } ?>
<?PHP if ($hourly) { ?>
<td class='section_hours <?PHP print $s['sign'] ?>'><?PHP print  $s['hours'] ?></td>
<?PHP } ?>
<?PHP if ($use_proration) { ?>
<td class='section_prorate <?PHP print $s['sign'] ?>'><?PHP print  $s['proration'] ?></td>
<?PHP } ?>
<td class='section_billed <?PHP print $s['sign'] ?>'><?PHP print  $s['billed'] ?></td>
<td class='section_cost <?PHP print $s['sign'] ?>'>$<?PHP print  $s['cost'] ?></td>
</tr>
<?PHP } ?>
</table>
<table>
<tr>
<th class='section_category total'>TOTAL</th>
<?PHP if ($use_quote) { ?>
<th class='section_quoted total'></th>
<?PHP } ?>
<?PHP if ($hourly) { ?>
<th class='section_hours total'><?PHP print $tothours ?></th>
<?PHP } ?>
<?PHP if ($use_proration) { ?>
<th class='section_prorate total'></th>
<?PHP } ?>
<th class='section_billed total'><?PHP print $totbilled ?></th>
<th class='section_cost total'>$<?PHP print $totcost ?></th>
</tr>
</table>
</div>

<br />
<h3>Line Items</h3>
<div class="bottom_line"></div>
<!-- compare with estimate/quotes here -->
<?PHP foreach ($section as $s) { ?>
<?PHP if ($s['title']) { ?><h4><?PHP print $s['title'] ?></h4><?PHP } ?>
<?PHP if ($s['body']) { ?><h5><?PHP print $s['body'] ?></h5><?PHP } ?>
<div class="section">
<?PHP if ($s['lines']) { ?>
<table>
<tr>
<th class="line_date">Date</th>
<th class="line_description">Description</th>
<?PHP if ($hourly) { ?>
<th class="line_hours">Hours</th>
<?PHP } ?>
<?PHP if ($use_proration) { ?>
<th class="line_billed">Billed</th>
<?PHP } ?>
<th class="line_cost">Cost</th>
</tr>
<?PHP foreach ($s['lines'] as $l) { ?>
<tr>
<td class="line_date <?PHP print $l['sign'] ?>"><?PHP print $l['date'] ?></td>
<td class="line_description <?PHP print $l['sign'] ?>"><?PHP print $l['description'] ?></td>
<?PHP if ($hourly) { ?>
<td class="line_hours <?PHP print $l['sign'] ?>"><?PHP print $l['hours'] ?></td>
<?PHP } ?>
<?PHP if ($use_proration) { ?>
<td class="line_billed <?PHP print $l['sign'] ?>"><?PHP print $l['billed'] ?></td>
<?PHP } ?>
<td class="line_cost <?PHP print $l['sign'] ?>">$<?PHP print $l['cost'] ?></td>
</tr>
<?PHP } ?>
</table>
<table>
<tr>
<th class="line_date"></th>
<th class="line_description total">SUBTOTAL</th>
<?PHP if ($hourly) { ?>
<th class="line_hours total"><?PHP print $s['hours'] ?></th>
<?PHP } ?>
<?PHP if ($use_proration) { ?>
<th class="line_billed total"><?PHP print $s['billed'] ?></th>
<?PHP } ?>
<th class="line_cost total">$<?PHP print $s['cost'] ?></th>
</tr>
</table>
<?PHP } ?>
</div><!-- section -->
<?PHP } ?>

<?PHP } else { // end-long-version ?>

<!-- Summary here -->
<h3>Overview</h3>
<div class="bottom_line"></div>
<br />
<?PHP if ($summary) { ?>
<h5><?PHP print $summary ?></h5>
<br />
<?PHP } // if-summary ?>

<ul class="total">
<li>TOTAL COST: $<?PHP print $totcost ?></li>
<li>Prev. Payments: $0</li>
<li>AMOUNT DUE: $<?PHP print $totcost ?></li>
</ul>

<br />
<h3>Line Items</h3>
<div class="bottom_line"></div>
<br />

<div class="section">
<table>
<tr>
<th class='line_date'>Date</th>
<th class='line_description'>Description</th>
<?PHP if ($use_quote) { ?>
<th class='line_quoted'>Quoted Hours</th>
<?PHP } ?>
<?PHP if ($hourly) { ?>
<th class='line_billed'>Billed Hours</th>
<th class='line_rate'>Rate</th>
<?PHP } ?>
<th class='line_cost'>Cost</th>
</tr>
<?PHP foreach ($lines as $l) { ?>
<tr>
<td class='line_date <?PHP print $l['sign'] ?>'><?PHP print  $l['date'] ?></td>
<td class='line_description <?PHP print $l['sign'] ?>'><strong><?PHP print  $l['title'] ?></strong>
<?PHP if ($l['description']) { ?>
  -- <?PHP print $l['description'] ?>
<?PHP } ?>
</td>
<?PHP if ($use_quote) { ?>
<td class='line_quoted <?PHP print $l['sign'] ?>'><?PHP print  $l['quoted'] ?></td>
<?PHP } ?>
<?PHP if ($hourly) { ?>
<td class='line_billed <?PHP print $l['sign'] ?>'><?PHP print  $l['billed'] ?></td>
<td class='line_rate <?PHP print $l['sign'] ?>'>$<?PHP print  $l['rate'] ?></td>
<?PHP } ?>
<td class='line_cost <?PHP print $l['sign'] ?>'>$<?PHP print  $l['cost'] ?></td>
</tr>
<?PHP } ?>
</table>
<table>
<tr>
<th class='line_date total'></th>
<th class='line_description total'>TOTAL</th>
<?PHP if ($use_quote) { ?>
<th class='line_quoted total'></th>
<?PHP } ?>
<?PHP if ($hourly) { ?>
<th class='line_billed total'><?PHP print $tothours ?></th>
<th class='line_rate total'></th>
<?PHP } ?>
<th class='line_cost total'>$<?PHP print $totcost ?></th>
</tr>
</table>
</div><!-- section -->

<?PHP } // short-version ?>
</div><!-- content -->

<h4>THANK YOU FOR YOUR BUSINESS!</h4>

<div id="footer">
<div class="bottom_line"></div>
<span >&copy; Stormweaver Programming, 2009</span>
</div>


</div><!-- wrapper -->
</body>
</html>
