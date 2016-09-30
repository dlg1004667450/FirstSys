<?php $this->load->view('header');?>

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
  <figure data-am-widget="figure" class="am am-figure am-figure-default "   data-am-figure="{  pureview: 'true' }">
      <div id="container">          
          <?php foreach ($imglist as $v):?>
          <div><img src="images/01.jpg"><h3>Agfa</h3></div>
          <?php endforeach;?>
    </div> 
  </figure>

</div>
<!-- content end -->

<?php $this->load->view('footer');?>