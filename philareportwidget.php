<?php
/* Plugin Name: Phila Report Widget
Plugin URI: localhost/wordpress
Description: Displays Report Buttons
Version: 1.0
Author: Andrew Kennel
Author URI: localhost/wordpress
*/

class PhilaReportWidget extends WP_Widget {
          function PhilaReportWidget() {
                    $widget_ops = array(
                    'classname' => 'PhilaReportWidget',
                    'description' => 'Phila Report Widget.'
          );

          $this->WP_Widget(
                    'PhilaReportWidget',
                    'Phila Report Widget',
                    $widget_ops
          );
}

          function widget($args, $instance) { // widget sidebar output
                    extract($args, EXTR_SKIP);
                    echo $before_widget; // pre-widget code from theme
print <<<EOM

<div id="ReportWidget" style="background-color: #FAFAFA; border-radius: 10px; padding: 10px">
<div class="bluebox" style="background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3661a2), color-stop(100%,#162e52)); margin-bottom: 5px; border: 1px solid #3661a2; border-radius: 10px; width: 70%; padding: 10px 3px 0px 10px; height: 28px;">
        <a href="http://www.phila.gov/ig/Pages/ReportWrongdoing.aspx" style="color:#ffffff; font-size: 15px; font-weight: bold; text-decoration:none">Fraud/Corruption</a><div class="triangle" style="font-size: 0px; 
     height: 0; 
     width: 0;
     border-top: 10px solid transparent;
     border-bottom: 10px solid transparent;
     border-left: 10px solid #ffffff; float: right"></div>
        </div>
        
        <div class="bluebox" style="background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3661a2), color-stop(100%,#162e52)); margin-bottom: 5px; border: 1px solid #3661a2; border-radius: 10px; width: 70%; padding: 10px 3px 0px 10px; height: 28px;">
        <a href="http://phillypolice.com/forms/submit-a-tip" style="color:#ffffff; font-size: 15px; font-weight: bold; text-decoration:none">Submit a Tip</a><div class="triangle" style="font-size: 0px; 
     height: 0; 
     width: 0;
     border-top: 10px solid transparent;
     border-bottom: 10px solid transparent;
     border-left: 10px solid #ffffff; float: right"></div>
        </div>
        
        <div class="bluebox" style="background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3661a2), color-stop(100%,#162e52)); margin-bottom: 5px; border: 1px solid #3661a2; border-radius: 10px; width: 70%; padding: 10px 3px 0px 10px; height: 28px;">
        <a href="http://potholes.phila.gov/tap.nsf/d15d032a30a36768852578850008337c?OpenForm" style="color:#ffffff; font-size: 15px; font-weight: bold; text-decoration:none">Potholes</a><div class="triangle" style="font-size: 0px; 
     height: 0; 
     width: 0;
     border-top: 10px solid transparent;
     border-bottom: 10px solid transparent;
     border-left: 10px solid #ffffff; float: right"></div>
        </div>
        
        
        <div class="bluebox" style="background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3661a2), color-stop(100%,#162e52)); margin-bottom: 5px; border: 1px solid #3661a2; border-radius: 10px; width: 70%; padding: 10px 3px 0px 10px; height: 28px;">
        <a href="http://www.phila.gov/311" style="color:#ffffff; font-size: 15px; font-weight: bold; text-decoration:none">Philly 311</a><div class="triangle" style="font-size: 0px; 
     height: 0; 
     width: 0;
     border-top: 10px solid transparent;
     border-bottom: 10px solid transparent;
     border-left: 10px solid #ffffff; float: right"></div>
        </div>
</div>

EOM;
                    echo $after_widget; // post-widget code from theme
          }
}

add_action(
          'widgets_init',
          create_function('','return register_widget("PhilaReportWidget");')
);
?>