<?php
/* Plugin Name: Phila Report Widget
Plugin URI: localhost/wordpress
Description: Displays Report Buttons
Version: 1.0
Author: Andrew Kennel
Author URI: localhost/wordpress
*/
add_shortcode('PhilaReportWidget', 'philareport_handler');

function philareport_handler(){
$message = <<<EOM

<div id="PhilaReportWidget" class="PhilaWidget">
	<span id="PhilaReportMainWindow">
		<h1>Talk to your City</h1>	
		 <a href="http://www.phila.gov/ig/Pages/ReportWrongdoing.aspx">Report Fraud/Corruption</a>
		 <br>
		 <a href="http://phillypolice.com/forms/submit-a-tip">Submit a Police Tip</a>
		 <br>
		 <a href="http://potholes.phila.gov/tap.nsf/d15d032a30a36768852578850008337c?OpenForm">Report a Pothole</a>		 
	</span>
</div>

EOM;
return $message;
}

function philareportwidget($args, $instance) { // widget sidebar output
  extract($args, EXTR_SKIP);
  echo $before_widget; // pre-widget code from theme
  echo philareport_handler();
  echo $after_widget; // post-widget code from theme
}
?>