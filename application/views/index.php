<?php $this->load->view('header'); ?>

<!-- banner start -->
<div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-article-margin">
    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{&quot;controlNav&quot;:false}' >
        <ul class="am-slides">
            <li>
                <img src="<?php echo base_url(); ?>style/index/assets/i/b1.jpg">
                <div class="blog-slider-desc am-slider-desc ">
                    <div class="blog-text-center blog-slider-con">
                        <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                        <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                        <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                        </p>
                        <span class="blog-bor">2015/10/9</span>
                        <br><br><br><br><br><br><br>                
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url(); ?>style/index/assets/i/b2.jpg">
                <div class="am-slider-desc blog-slider-desc">
                    <div class="blog-text-center blog-slider-con">
                        <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                        <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                        <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                        </p>
                        <span>2015/10/9</span>                
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url(); ?>style/index/assets/i/b3.jpg">
                <div class="am-slider-desc blog-slider-desc">
                    <div class="blog-text-center blog-slider-con">
                        <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                        <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                        <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                        </p>
                        <span>2015/10/9</span>                
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url(); ?>style/index/assets/i/b2.jpg">
                <div class="am-slider-desc blog-slider-desc">
                    <div class="blog-text-center blog-slider-con">
                        <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                        <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                        <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                        </p>
                        <span>2015/10/9</span>                
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- banner end -->

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">

        <?php foreach ($article as $v): ?>
            <article class="am-g blog-entry-article">
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                    <img src="<?php echo base_url(); ?>style/index/assets/i/f10.jpg" alt="" class="am-u-sm-12">
                </div>
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                    <span><a href="" class="blog-color">article &nbsp;</a></span>
                    <span> @amazeUI &nbsp;</span>
                    <span><?php echo date('Y/m/d', $v['time']); ?></span>
                    <h1><a href="<?php echo site_url('home/article/' . $v['id']) ?>"><?php echo $v['title'] ?></a></h1>
                    <p><?php echo $v['description']; ?></p>
                    <p><a href="<?php echo site_url('home/article/' . $v['id']) ?>" class="blog-continue">continue reading</a></p>
                </div>
            </article>
        <?php endforeach; ?>

        <ul class="am-pagination">
            <?php echo $this->pagination->create_links(); ?>
        </ul>
    </div>

    <div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>About ME</span></h2>
            <img src="<?php echo base_url(); ?>style/index/assets/i/f14.jpg" alt="about me" class="blog-entry-img" >
            <p>Gangs</p>
            <p>
                我是一名Coder，对Code非常喜欢，正在努力学习中
            </p><p>我不想成为一个庸俗的人。十年百年后，当我们死去，质疑我们的人同样死去，后人看到的是裹足不前、原地打转的你，还是一直奔跑、走到远方的我？</p>
        </div>

        <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ">
            <h2 class="blog-title"><span>TAG cloud</span></h2>
            <div class="am-u-sm-12 blog-clear-padding">
                <?php foreach ($categoryes as $value): ?>
                    <a href="" class="blog-tag"><?php echo $value['cname']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>么么哒</span></h2>
            <ul class="am-list">
                <li><a href="#">每个人都有一个死角， 自己走不出来，别人也闯不进去。</a></li>
                <li><a href="#">我把最深沉的秘密放在那里。</a></li>
                <li><a href="#">你不懂我，我不怪你。</a></li>
                <li><a href="#">每个人都有一道伤口， 或深或浅，盖上布，以为不存在。</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- content end -->

<?php $this->load->view('footer'); ?>

