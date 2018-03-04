<?php

/**
 * Show time being tracked in Phrequent.
 */
final class ArcanistTimeWorkflow extends ArcanistPhrequentWorkflow {

  public function getWorkflowName() {
    return 'time';
  }

  public function getWorkflowSynopses() {
    return phutil_console_format(<<<EOTEXT
      **time**
EOTEXT
      );
  }

  public function getWorkflowHelp() {
    return phutil_console_format(<<<EOTEXT
          Show what you're currently tracking in Phrequent.
EOTEXT
      );
  }

  public function requiresConduit() {
    return true;
  }

  public function requiresAuthentication() {
    return true;
  }

  public function run() {
    $this->printCurrentTracking();
  }

}
