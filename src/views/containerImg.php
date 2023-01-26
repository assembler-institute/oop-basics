<?php
function setContainerWithImage($color, $title, $image)
{
  ?>
  <div>
    <div class="title-img <?php echo $color ?>">
      <h1 class="title"><?php echo $title ?></h1>
      <img class="img" src="../assets/images/<?php echo $image ?>.png" alt="<?php echo $image ?>">
    </div>
  </div>
  <?php
}