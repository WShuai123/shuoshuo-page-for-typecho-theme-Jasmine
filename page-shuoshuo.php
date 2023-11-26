<?php
/**
 * 说说页面
 *
 * @package custom
 */
if (!defined("__TYPECHO_ROOT_DIR__")) {
  exit();
}
?>
<!DOCTYPE html>
<html lang="zh">
<?php $this->need("header.php"); ?>

<body class="jasmine-body" data-prismjs-copy="点击复制" data-prismjs-copy-error="按Ctrl+C复制" data-prismjs-copy-success="内容已复制！">
  <div class="jasmine-container grid grid-cols-12">
    <!--左侧边栏-->
    <?php $this->need("component/sidebar-left.php"); ?>
    <div class="flex col-span-12 lg:col-span-8 flex-col lg:border-x-2 border-stone-100 dark:border-neutral-600 lg:pt-0 lg:px-6 pb-10 px-3">
      <?php $this->need("component/menu.php"); ?>
      <div class="flex flex-col gap-y-12">
        <div></div>
        <?php $this->need("component/post-title.php"); ?>
        <!-- 正文 -->
        <div class="markdown-body dark:!bg-[#161829] dark:!bg-[#0d1117] !text-neutral-900 dark:!text-gray-400" itemprop="articleBody">
			<div id="bber"></div>
				<script type="module" src="https://immmmm.com/emaction.js?v=230811"></script>
				<script src="https://fastly.jsdelivr.net/npm/marked/marked.min.js"></script>
				<script src="https://fastly.jsdelivr.net/gh/Tokinx/Lately/lately.min.js"></script>
				
				<style>
                    /* 删除标题下的时间 */
					.mx-1.flex.flex-col .dark\:text-gray-400 {
						display: none;
				}</style>
				
				<script type="text/javascript">
				  var bbMemos = {
				    memos : 'https://yourdomain.com/',//修改为自己部署 Memos 的网址，末尾有 / 斜杠
				    limit : '',//默认每次显示 10 条
				    creatorId:'1' ,//早期默认为 101 用户，新安装是 1； https://demo.usememos.com/u/101
				    domId: '',//默认为 bber
				  }
				</script>
				<script src="https://cdn.jsdelivr.net/gh/WShuai123/photo-page-for-typecho-theme-Jasmine@main/shuoshuo.js"></script>

        <!-- 正文结束 -->
        </div>
		<!--    评论区    -->
        	<div>
             <?php $this->need("comments.php"); ?>
          </div>
      </div>
    </div>
    <div class="hidden lg:col-span-3 lg:block" id="sidebar-right">
      <?php $this->need("component/sidebar.php"); ?>
    </div>
  </div>
  <?php $this->need("footer.php"); ?>
</body>

</html>
