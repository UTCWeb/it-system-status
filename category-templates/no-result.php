<?php
/**
 * @package iPanelThemes Knowledgebase
 */
?>
<div class="list-group-item text-muted"> <span class="glyphicon ipt-icon-blocked"></span>
  <?php
  switch ( $cat->name ) {
    case "Announcements":
      _e( 'No Announcements.', 'ipt_kb' );
      break;
    case "Status Normal":
      _e( 'Please Stand By.', 'ipt_kb' );
      break;
    case "System Issues/Outage":
      _e( 'No System Issues or Outages.', 'ipt_kb' );
      break;
    case "Problems Detected":
      _e( 'No Problems Detected.', 'ipt_kb' );
      break;
    case "System Maintenance":
      _e( 'No System Maintenance.', 'ipt_kb' );
      break;
    default:
      _e( 'Nothing to report.', 'ipt_kb' );
  }

  ?>
</div>
