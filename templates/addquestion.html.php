<form action="" method="post">
    <select name="students" style="margin-left: 11.6em; width: 11em;">
        <option value="">Select a student</option>
        <?php foreach($students as $student): ?>
            <option value="<?php echo htmlspecialchars($student['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?php echo htmlspecialchars($student['username'], ENT_QUOTES, 'UTF-8'); ?></option>
        <?php endforeach;?>
    </select>

    <select name="modules" style="width: 11em;">
        <option value="">Select a module</option>
        <?php foreach($modules as $module): ?>
            <option value="<?php echo htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?php echo htmlspecialchars($module['moduleCode'], ENT_QUOTES, 'UTF-8'); ?></option>
        <?php endforeach;?>
    </select>
    
    <Label for="postText">Type your post here:</Label>
    <textarea id="postText" name="postText" rows="3" cols="40"></textarea>


    <input type="submit" name="submit" value="Add">
</form>