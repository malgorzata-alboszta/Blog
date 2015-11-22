<?php $title = $post['title'] ?>

<?php ob_start() ?>
<h1> <?php echo $post['title'] ?> </h1>

<div class ="title"><?php echo $post['title'] ?> </div>
<div class="content">
    <?php echo $post['content'] ?>
</div>
<?php $content = ob_get_clean() ?>
<?php include 'layout.html.php' ?>

