<?php

final class ArcanistAnoidWorkflow extends ArcanistArcWorkflow {

  public function getWorkflowName() {
    return 'anoid';
  }

  public function getWorkflowSynopses() {
    return array(
      pht('**anoid**'),
    );
  }

  public function getWorkflowHelp() {
    return pht(<<<EOTEXT
There's only one way to find out...
EOTEXT
      );
  }

  public function run() {
    phutil_passthru(
      '%s/scripts/breakout.py',
      dirname(phutil_get_library_root('arcanist')));
  }

}
