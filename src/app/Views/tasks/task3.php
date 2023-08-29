<div style="display:flex">
<div><h1>Задание №3 CRUD</h2>
<table class="table table-bordered">
	<thead class="thead-dark">
    <tr>
        <th scope="col">№</th>
        <th scope="col">Name</th>
        <th scope="col">Text</th>
        <th scope="col">Date</th>
        <th scope="col">Delete</th>
    </tr>
</thead>
<tbody>
        <?php foreach ($comments as $comment){ ?>
            <?php for($i=0;$i<count($comment);$i++){?>
            <tr id ='comment<?php echo $i;?>'>
                <td scope="col">
                    <?php echo $comment[$i]['id']?>
                </td>
                <td scope="col">
                    <?php echo $comment[$i]['name']?>
                </td>
                <td scope="col">
                    <?php echo $comment[$i]['text']?>
                </td>
                <td scope="col">
                    <?php echo $comment[$i]['date']?>
                </td>
                <form id='deleteComment<?php echo $i ?>' method='post'>
                    <input type='hidden' name='id<?php echo $i ?>' id='id<?php echo $i ?>' value='<?php echo $comment[$i]['id']; ?>'>
                    <td><input type="submit" name="delet" value ='Удалить' class="btn btn-light" onclick="hideRow('<?php echo $i ?>')"></td>
                </form>
            </tr>
        <?php }}?>
</tbody>
</table>
<div>
    <h3>Оставьте ваш комментарий</h3>
    <form id = 'createComent' method = 'post'>
        <table>
            <tr class = 'field'>
                <td>
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required/>
                </td>
            </tr>
            <tr class = 'field'>
                <td>
                    <label for="text">Text</label>
                    <input type="text"  class="form-control" name="text" id="text" required />
                </td>
            </tr>
            <tr class = 'field'>
                <td>
                    <label for="date">Дата</label>
                    <input type="date" class="form-control" name="date" id="date" required />
                </td>
            </tr>
            <tr class = 'actions'>
                <td><input type="submit" class="btn btn-dark" name="create" id="create" value="Отправить" disabled="disabled"/></td>
            </tr>
        </table>
    </form>
</div>

</div><div>
    <?php $code = highlight_string(file_get_contents(__FILE__));?>
</div></div>
