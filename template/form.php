<?php
    $fields = [
        'title' => [
            'label' => 'Название',
            'type' => 'input'
        ],
        'preview_text' => [
            'label' => 'Текст превью',
            'type' => 'textarea'
        ],
        'detail_text' => [
            'label' => 'Детальный текст',
            'type' => 'textarea'
        ],
        'image' => [
            'label' => 'Изображение',
            'type' => 'file'
        ],
    ];

    $errors = [];
    foreach ($fields as $key => $field){
        if(isset($_REQUEST[$key]) && $_REQUEST[$key]==''){
            $errors[] = $key;
        }
    }

    if(!$errors && $_REQUEST){
        $file_url = '';
        if($_FILES['image']['name']){
            $file_url = 'news_images/'.$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],$file_url);
            $file_url='/'.$file_url;
        }

        $result = create($_REQUEST,$file_url);
    }

?>

<form action="create.php" method="post" enctype="multipart/form-data">
    <?php foreach ($fields as $key => $field) {?>
        <?php if($field['type'] == 'input'){?>
            <div class="mb-3">
                <label class="form-label"><?php echo $field['label'] ?? ''?></label>
                <input name="<?php echo $key ?? ''?>" value="<?php echo htmlspecialchars($_REQUEST[$key] ?? '')?>" type="text" class="form-control <?php if(in_array($key,$errors)){echo 'is-invalid';}elseif(isset($_REQUEST[$key])){echo 'is-valid';}?>">
            </div>
        <?php }elseif($field['type'] == 'textarea'){?>
            <div class="mb-3">
                <label class="form-label"><?php echo $field['label'] ?? ''?></label>
                <textarea name="<?php echo $key ?? ''?>" class="form-control <?php if(in_array($key,$errors)){echo 'is-invalid';}elseif(isset($_REQUEST[$key])){echo 'is-valid';}?>" rows="3"><?php echo htmlspecialchars($_REQUEST[$key] ?? '')?></textarea>
            </div>
        <?php }elseif($field['type'] == 'file'){?>
            <div class="mb-3">
                <label class="form-label"><?php echo $field['label'] ?? ''?></label>
                <input name="<?php echo $key ?? ''?>" class="form-control <?php if(in_array($key,$errors)){echo 'is-invalid';}elseif(isset($_REQUEST[$key])){echo 'is-valid';}?>" type="file"/>
            </div>
        <?php }?>
    <?php }?>

    <button type="submit" class="btn btn-primary">Создать</button>
</form>

<?php if(isset($result) && $result == true){?>
    <div class="alert alert-success" role="alert">
        Новость успешно создана!
    </div>
<?php }?>

<?php if(count($errors)>0){?>
    <div class="alert alert-danger" role="alert">
        Заполните все поля!
    </div>
<?php }?>