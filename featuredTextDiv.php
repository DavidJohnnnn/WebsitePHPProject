<section>
  <div class="card FeaturedTextDiv <?php echo $FeaturedImgIndex ?>">
    <div class="sideWipeContainer">
      <div class="sideWipe1 leftSideWipe"></div>
    </div>
    <p class="FeatPgh hideDiv">
      <?php echo $paragraph ?>
    </p>
    <p class="FeatPgh hideDiv" style="margin-top: 1%;">
      <?php echo $subLine ?>
    </p>
    <br>
    <a href="<?php echo $link ?>" class="btn btn-light hideDiv" onclick="window.open(this.href); return false;"><?php echo $linkText ?></a>
  </div>
</section>
