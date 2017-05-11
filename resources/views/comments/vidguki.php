<div class="panel">
    <div class="panel-heading ui-sortable-handle">
        <div class="panel-control">
            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
        </div>
        <h3 class="panel-title">Відгуки</h3>
    </div>
    <div class="panel-body" style="display: block;">

        <?foreach($comments as $comment){
            ?>
            <blockquote>
                <?php
                echo $comment['original']['text']?>
            </blockquote>



            <?php

        }
        ?>
        <blockquote class="blockquote-reverse">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer>Someone famous in <cite>Source Title</cite></footer>
        </blockquote>
    </div>
    <div style="height:100px;"></div>
    <!--Добавити відгуки-->
    <div class="panel" >
        <h3 class="panel-title">Додати відгук</h3>
        <form action="<?php echo route('add_comment');?>" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
            <textarea name="editor_comment"></textarea>
            <input type="hidden" name="id_good" value="<?php echo $good[0]['original']['id'] ?>">
            <button type="submit" class="btn btn-success">Додати відгук</button>
            <div style="height:100px;"></div>
        </form>
        <script>
            CKEDITOR.replace('editor_comment');
        </script>


    </div>
</div>