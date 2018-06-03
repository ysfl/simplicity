<?php
/**
 * 一套简约的中间色调主题
 *
 * @package MIDTON theme
 * @author Mizodo
 * @version 1.0
 * @link https://blog.mizodo.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

    <div id="midtone-banner">
        <div class="container">
            <div class="row">
                <div class="col-mb-12 col-12">
                      <a href="<?php $this->options->siteUrl(); ?>">
                       <img id="avatar" src="
                         <?php
                           if ($this->options->avatarUrl){
                             $this->options->avatarUrl();
                           }else{
                             echo 'https://secure.gravatar.com/avatar/'.md5(strtolower(trim($this->author->mail)));
                           }
                         ?>
                       ">
                     </a>
                     <span class="description"><?php $this->options->description() ?></span>
                </div>
            </div>
        </div>
    </div>
<div class="midtone-post-wrap">
	<div class="container midtone-postlist">
		<div class="row">
        <div id="post-style"><span class="post-style-cubes"><i class="iconfont icon-card"></i></span><span class="post-style-lines currentstyle"><i class="iconfont icon-liebiao"></i></span></div>
		<?php while($this->next()): ?>
			<div class="midtone-post col-12 col-md-12">
				<div class="post-article">
					<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					<div class="post-meta">
						<span class="post-meta-dash"><?php _e('发布时间'); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span>
						<span class="post-meta-dash"><?php _e('分类'); ?><?php $this->category(','); ?></span>
						<span><?php get_post_view($this) ?><?php _e('阅读量'); ?></span>
					</div>
					<?php if(isset($this->fields->post_cover)){  ?>
					<div class="post-cover">
							<img src="<?php echo $this->fields->post_cover;?>"/>
					</div>
					<?php };?>
					<div class="post-content" itemprop="articleBody">
		    			<a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->excerpt(300, '...'); ?></a>
		      </div>
		            <a href="<?php $this->permalink() ?>"><button class="btn btn-primary">查看全文</button></a>
		            <span class="post-comments" itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('<i class="iconfont icon-comment"></i>0', '<i class="iconfont icon-comment"></i>1', '<i class="iconfont icon-comment"></i>%d'); ?></a></span>
				</div>
			</div>
		<?php endwhile; ?>
			<div class="page-parameter col-12 col-md-12">
				<h5><?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?><?php echo ' / ';?><?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></h5>
				<?php $this->pageLink('<span class="btn btn-grey">下一页</span>', 'next') ?>
	            <?php $this->pageLink('<span class="btn btn-grey">上一页</span>', 'prev') ?>
			</div>
		</div>
		</div>
	</div>
	</div>

<?php $this->need('footer.php'); ?>
