<?php

return [
  ['GET', '/', ['Test\controllers\ColorsController', 'index']],
  ['GET', '/color/', ['Test\controllers\ColorsController', 'get_votes']]
];

?>