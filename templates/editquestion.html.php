<form action="" method="post">
    <Label for="postText">Type your post here:</Label>
    <textarea id="postText" name="postText" rows="3" cols="40"><?=$post['postText']?></textarea>
    <input type="hidden" name="postid" value="<?=$post['id']?>">
    <input type="submit" name="submit" value="Save">
</form>