<?php

namespace Dockworker\Robo\Plugin\Commands;

use Dockworker\Robo\Plugin\Commands\DockworkerLocalCommands;

/**
 * Defines commands used to build the tree for the Sphinx application.
 */
class SphinxThemeCommands extends DockworkerLocalCommands {

  /**
   * Compiles Sphinx tree.
   *
   * @hook post-command theme:build-all
   */
  public function setBuildSphinxTree() {

  }

}
