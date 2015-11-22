<?php $title = 'List of Posts' ?>

<?php ob_start() //turn on output buffering. While output buffering is active no output is sent from the script (other than headers), instead the output is stored in an internal buffer. ?>
        <h1>List of Posts</h1>
        <ul>
            <?php foreach ($posts as $post): ?>
            <li>
                <a href="/Blog/index.php/show?id=<?php echo $post['id'] ?> ">
                <?php echo $post['title'] ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
<?php $content = ob_get_clean()  //Get current buffer contents and delete current output buffer. ?>

<?php include 'layout.html.php' ?>

