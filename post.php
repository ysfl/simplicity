<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


    <div id="midtone-banner">
        <div class="container">
            <div class="row">
                <div class="col-mb-12 col-12" id="fading">
                     <h1 class="post-inner-title"><?php $this->title() ?></h1>
                     <div class="post-inner-meta">
                        <span class="post-inner-meta-dash"><?php _e(''); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span>
                        <span class="post-inner-meta-dash"><?php _e('In&nbsp;&nbsp;'); ?><?php $this->category(','); ?></span>
                        <span class="post-inner-meta-dash"><?php get_post_view($this) ?><?php _e('&nbsp;&nbsp;views'); ?></span>
                        <span><a itemprop="discussionUrl" href="#comments"><?php $this->commentsNum('no comments', '1 comment', '%d comments'); ?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="midtone-post-wrap">
    <div class="container post-container">
        <div class="row">
            <div id="totop">
                <a class="totop-btn" href="javascript:void(0);"><i class="iconfont icon-up"></i></a>
                <a href="#comments"><i class="iconfont icon-comment"></i></a>
                <?php /*
                <a class="article-qr" href="javascript:void(0);">
                  <i class="iconfont icon-qr"></i>
                  <div class="article-qrbody">
                    <img src="https://pan.baidu.com/share/qrcode?w=120&h=120&url=<?php $this->permalink() ?>" alt="<?php $this->permalink() ?>">
                  </div>
                </a>
                */?>
            </div>
            <div class="post-inner-content col-12" id="post-article" itemprop="articleBody">
                 <div id="toc"></div>
                <?php $this->content(); ?>
            </div>
            <div class="post-inner-footer col-12">
                <div class="post-inner-tags"><?php _e(''); ?><?php $this->tags('', true, ''); ?></div>
            </div>
            <div class="col-12">
                <div class="post-copyrights">

                </div>
            </div>
            <div class="post-near col-12 clearfix" id="pagenavi">
                <?php thePrev($this); ?>
                <?php theNext($this); ?>
            </div>
            <?php $this->need('comments.php'); ?>
        </div>

    </div>
</div>
</div>
<?php $this->need('footer.php'); ?>
