<?php get_header(); ?>
<!-- Tab panes -->
<h2>testing</h2>
<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation">
        <a href="#kitchen" aria-controls="kitchen" role="tab" data-toggle="tab">Kitchen</a>
   </li>
    <li role="presentation" class="active">
        <a href="#bath" aria-controls="bath" role="tab" data-toggle="tab">Bath</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane" id="kitchen">Kitchen Layout</div>
    <div role="tabpanel" class="tab-pane active" id="bath">Bath Layout</div>
  </div>

</div>

<p>end of testing</p>
<?php get_footer(); ?>
