<div class="container">
  <div class="d-flex">
    <div class="badge bg-secondary">
    <!-- check wp codex for format -->
      <?php
        the_date()
      ?>
    </div>
    <div class="badge bg-secondary">
      <?php
        the_tags('<span class="no-deco"><i class="fa fa-tag"></i>','</span> <span class="no-deco"><i class="fa fa-tag"></i>','</span>')
      ?>
    </div>
  </div>
  <?php
    the_content()
  ?>
</div>
