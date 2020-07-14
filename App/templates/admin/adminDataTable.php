<h1> Админ панель </h1>
<h1> Статьи </h1>
<table>
    <tr>
        <td>id Статьи</td>
        <td>Заголовок статьи</td>
        <td>Текст</td>
        <td>id Автора </td>
        <td>Редактировать</td>
        <td>Удалить</td>
    </tr>
    <?php foreach ($this->models as $model) { ?>
        <tr>
            <?php foreach ($this->functions as $function) { ?>
                <td><?php echo $function($model); ?></td>
            <?php } ?>
            <td>
                <form action= "/admin/article/edit" method= "post" >
                    <button name="id" value="<?php echo $model->getId() ?>">
                        Редактировать
                    </button>
                </form>
            </td>
            <td>
                <form action= "/admin/article/delete" method= "post" >
                    <button name="id" value="<?php echo $model->getId() ?>">
                        Удалить статью
                    </button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
<a href="/admin/article/add"> Добавить новую статью </a>
