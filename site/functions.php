<?php

/**
 * Show the button to go to next project level.
 *
 * @param string $project
 *   The name of the next project.
 */
function nextProject($project) {
  echo "
    <div class=\"page-down-container\">
      <div class=\"page-down trigger-vertical-scroll\">
        <p>$project</p>
        <i class=\"fa fa-angle-double-down\" aria-hidden=\"true\"></i>
      </div>
    </div>
  ";
}