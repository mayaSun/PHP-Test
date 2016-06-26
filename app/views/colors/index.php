<div class='container'>
  <div class='colors index'>
    <div class='title'>
      colors
    </div>
    <div class='sub-title'>
      click on the color name to see how many votes for that color. when you do click on Total, the sum of above numbers will show.
    </div>
    <table class='table table-striped'>
      <thead>
        <tr>
          <th>Colors</th>
          <th>Votes</th>
        </tr>
      </thead>
    <tbody>
      <?php foreach($colors as $color) { ?>
        <tr>
          <td>
            <a href='#' class='get-votes' data-color-id=<?php echo $color->id; ?>>
              <?php echo $color->color; ?>
            </a>
          </td>
          <td>
            <p id=<?php echo 'votes_color_' .  $color->id ; ?>></p>
          </td>
        </tr>
      <?php } ?>
      <tr>
        <td>
          <a href='#' class='get-total-votes'>TOTAL</a>
          
        </td>
        <td>
          <p id='total-votes'></p>
        </td>
      </tr>
    </tbody>
  </div>
</div>