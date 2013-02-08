<script src="/js/redactor/redactor.js"></script>
<script type="text/javascript">
    $(document).ready(
        function () {
            $('#redactor_content').redactor({lang:"ru", autosave:"/redactor/autosave", imageUpload:"/redactor/upload_image", fileUpload:"/redactor/upload_file", removeClasses: false});
        }
    );
</script>
<form action="admin/articles/create" method="post">
    <fieldset>
        <legend>Создание статьи</legend>
        <div class="control-group">
            <label class="control-label" for="caption">Название статьи</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on">
                    <i class="icon-font"></i>
                </span><input type="text" name="caption" id="caption-input" class="input-xxlarge"/>
                </div>
                <p class="help-inline">Введите название для новой статьи</p>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="category">Категория</label>

            <div class="controls">
                <select name="category" class="input-large">
                    <?php
                    foreach($categories as $category) {
                        echo '<option value="'.$category->id.'">'.$category->name.'</option>';
                    }

                        ?>
                </select>
                <p class="help-inline">Выберите категорию статьи</p>
            </div>
        </div>
        <p>Текст статьи</p>
        <div class="row">
            <div class="span9" style="padding-bottom: 30px;">
                <input type="text" id="redactor_content" name="text" style="min-height: 500px;"></textarea>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" name="form-submit" value="true" class="btn btn-primary">Сохранить статью</button>
            <button class="btn">Отмена</button>
        </div>
    </fieldset>
</form>