<?php

namespace Dockworker\Robo\Plugin\Commands;

use Dockworker\Robo\Plugin\Commands\DockworkerLocalCommands;

/**
 * Defines the commands used to interact with a local Sphinx application.
 */
class SphinxDeploymentCommands extends DockworkerLocalCommands {

  /**
   * Provides log checker with ignored log exception items for local Sphinx.
   *
   * @hook on-event dockworker-deployment-log-error-exceptions
   */
  public function getErrorLogExceptions() {
    return [
      '0 error(s)' => 'Zero errors means no errors',
    ];
  }

}
