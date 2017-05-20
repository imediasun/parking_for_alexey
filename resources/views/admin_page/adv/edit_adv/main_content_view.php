<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">

        <div class="pageheader">
            <h3><i class="fa fa-home"></i> Add trade Center </h3>
            <div class="breadcrumb-wrapper"><span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active"> add Trade Center</li>
                </ol>
            </div>
        </div>

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Trade center preferences</h4>

                        <div class="row">


                            <div class="col-lg-12">
                                <div class="card-box p-b-0">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Basic Wizard</h4>

                                    <form id="add_center" action="/admin/update_adv" method="post">
                                        <div id="basicwizard" class=" pull-in">
                                            <ul class="nav nav-tabs navtab-wizard nav-justified bg-muted">
                                                <li class="">
                                                    <a href="#tab1" data-toggle="tab" aria-expanded="false">Information</a>
                                                </li>
                                                <li class="active">
                                                    <a href="#tab2" data-toggle="tab" aria-expanded="true">Image</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content b-0 m-b-0">
                                                <div class="tab-pane m-t-10 fade" id="tab1">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Tile</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" name="title" value="<?= $adv[0]->title ?>" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Short Description</label>
                                                            <div class="col-md-10">
                                                                <textarea class="form-control" name="short_description"><?= $adv[0]->short_description ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Large Description</label>
                                                            <div class="col-md-10">
                                                                <textarea class="form-control" name="large_description"><?= $adv[0]->large_description ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane m-t-10 fade active in" id="tab2">
                                                    <div class="row">
                                                        <div class="col-lg-12">

                                                            <div class="logo_preview">
                                                                <img style="position:absolute;width:150px;" src="/photos/<?php echo $adv[0]->image_small ?>">
                                                            </div>

                                                            <div id="appl_window1">

                                                                <div id="close_window1" class="del_prod_btn"></div>
                                                                <div id="add_photo1">
                                                                    <br>
                                                                    <h6>Выберите
                                                                        <?
                                                                        $count_images = 1;
                                                                        $image_width = 1200;
                                                                        $image_height = 800;
                                                                        $image_type = 'logo';
                                                                        $image_index = 1;
                                                                        echo $count_images;
                                                                        if ($count_images == 1) {
                                                                            echo "фотографию";
                                                                        } else {
                                                                            if ($count_images > 1 && $count_images < 5) {
                                                                                echo "фотографии";
                                                                            } else {
                                                                                if ($count_images > 4) {
                                                                                    echo "фотографий";
                                                                                }
                                                                            }
                                                                        }
                                                                        ?>
                                                                        (не более 2М)
                                                                        <?= $image_width ?>х<?= $image_height ?>px -
                                                                        <? if ($image_type == 'logo') {
                                                                            echo "логотип данного производителя";
                                                                        } else {
                                                                            if ($image_type == 'door') {
                                                                                echo "фотографии выбранной двери";
                                                                            } else {
                                                                                if ($image_type == 'material' or $image_type == 'material_edit') {
                                                                                    echo "фотографии материала";
                                                                                }
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </h6>
                                                                    <label>Фотография*<span>&nbsp;&nbsp;&nbsp;       Чтобы добавить картинку, нажми обзор или просто перетащи в желтую область ниже &dArr;<hr></span></label>
                                                                    <br>
                                                                    <input type="file" name="my-pic[]" id="file-field4" class="image" multiple="multiple"/>
                                                                    <a id="cancel-all4">Отменить все</a>
                                                                    <div id="img-container4">
                                                                        <ul id="img-list4"></ul>
                                                                    </div>
                                                                    <div id="leftpanel1">
                                                                        <div id="actions1">
                                                                            <input type="hidden" name="lwidth" value="<?= $image_width ?>">
                                                                            <input type="hidden" name="lheight" value="<?= $image_height ?>">
                                                                            <input type="hidden" name="lproducers" value="/upload">
                                                                            <input type="hidden" name="ltype" value="<?= $image_type ?>">
                                                                            <span id="info-count1">Изображений не выбрано</span><br/>
                                                                            Общий размер:<span id="info-size1">0</span> Кб<br/><br/>
                                                                        </div>
                                                                        <div id="console4"></div>
                                                                        <div style="width:250px;" class="btn btn-primary apply_btn1">Сохранить фото на сервере</div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <script>
                                                                $(document).ready(function () {

                                                                    // Консоль
                                                                    var $console = $("#console4");

                                                                    // Инфа о выбранных файлах
                                                                    var countInfo = $("#info-count1");
                                                                    var sizeInfo = $("#info-size1");

                                                                    // ul-список, содержащий миниатюрки выбранных файлов
                                                                    var imgList = $('#img-list4');

                                                                    // Контейнер, куда можно помещать файлы методом drag and drop
                                                                    var dropBox = $('#img-container4');

                                                                    // Счетчик всех выбранных файлов и их размера
                                                                    var imgCount = 0;
                                                                    var imgSize = 0;


                                                                    // Стандарный input для файлов
                                                                    var fileInput = $('#file-field4');

                                                                    // Тестовый canvas
                                                                    /*  var canvas = document.getElementById('canvas');
                                                                     var ctx = canvas.getContext("2d");
                                                                     ctx.fillStyle = "rgb(128,128,128)";
                                                                     ctx.fillRect (0, 0, 150, 150);
                                                                     ctx.fillStyle = "rgb(200,0,0)";
                                                                     ctx.fillRect (10, 10, 55, 50);
                                                                     ctx.fillStyle = "rgba(0, 0, 200, 0.5)";
                                                                     ctx.fillRect (30, 30, 55, 50); */


                                                                    ////////////////////////////////////////////////////////////////////////////
                                                                    // Подключаем и настраиваем плагин загрузки

                                                                    var uploaded_data = [];
                                                                    var img_preloaded = false;
                                                                    fileInput.damnUploader({
                                                                        // куда отправлять
                                                                        url: '/functions_image',
                                                                        // имитация имени поля с файлом (будет ключом в $_FILES, если используется PHP)
                                                                        fieldName: 'my-pic',
                                                                        // дополнительно: элемент, на который можно перетащить файлы (либо объект jQuery, либо селектор)
                                                                        dropBox: dropBox,
                                                                        // максимальное кол-во выбранных файлов (если не указано - без ограничений)
                                                                        limit: <?echo $count_images?>,
                                                                        // когда максимальное кол-во достигнуто (вызывается при каждой попытке добавить еще файлы)
                                                                        onLimitExceeded: function () {
                                                                            log('Допустимое кол-во файлов уже выбрано');
                                                                        },
                                                                        // ручная обработка события выбора файла (в случае, если выбрано несколько, будет вызвано для каждого)
                                                                        // если обработчик возвращает true, файлы добавляются в очередь автоматически
                                                                        onSelect: function (file) {
                                                                            viewFile(file);
                                                                            window.allcomplete = null;
                                                                            return false;
                                                                        },

                                                                        // когда все загружены
                                                                        onAllComplete: function () {

                                                                            log('<span style="color: blue;">*** Все загрузки завершены! ***</span>');

                                                                            imgCount = 0;
                                                                            imgSize = 0;
                                                                            updateInfo();

                                                                        }

                                                                    });


                                                                    ////////////////////////////////////////////////////////////////////////////
                                                                    // Вспомогательные функции

                                                                    // Вывод в консоль
                                                                    function log(str) {
                                                                        $('<p/>').html(str).prependTo($console);
                                                                    }

                                                                    // Вывод инфы о выбранных
                                                                    function updateInfo() {
                                                                        countInfo.text((imgCount == 0) ? 'Изображений не выбрано' : ('Изображений выбрано: ' + imgCount));
                                                                        sizeInfo.text((imgSize == 0) ? '-' : Math.round(imgSize / 1024));
                                                                    }

                                                                    // Обновление progress bar'а
                                                                    function updateProgress(bar, value) {
                                                                        var width = bar.width();
                                                                        var bgrValue = -width + (value * (width / 100));
                                                                        bar.attr('rel', value).css('background-position', bgrValue + 'px center').text(value + '%');
                                                                    }

                                                                    // преобразование формата dataURI в Blob-данные
                                                                    function dataURItoBlob(dataURI) {
                                                                        var BlobBuilder = (window.MSBlobBuilder || window.MozBlobBuilder || window.WebKitBlobBuilder || window.BlobBuilder);
                                                                        if (!BlobBuilder) {
                                                                            return false;
                                                                        }
                                                                        // convert base64 to raw binary data held in a string
                                                                        // doesn't handle URLEncoded DataURIs
                                                                        var pieces = dataURI.split(',');
                                                                        var byteString = (pieces[0].indexOf('base64') >= 0) ? atob(pieces[1]) : unescape(pieces[1]);
                                                                        // separate out the mime component
                                                                        var mimeString = pieces[0].split(':')[1].split(';')[0];
                                                                        // write the bytes of the string to an ArrayBuffer
                                                                        var ab = new ArrayBuffer(byteString.length);
                                                                        var ia = new Uint8Array(ab);
                                                                        for (var i = 0; i < byteString.length; i++) {
                                                                            ia[i] = byteString.charCodeAt(i);
                                                                        }
                                                                        // write the ArrayBuffer to a blob, and you're done
                                                                        var bb = new BlobBuilder();
                                                                        bb.append(ab);
                                                                        return bb.getBlob(mimeString);
                                                                    }

                                                                    var files_num = 0;

                                                                    function viewFile(file) {
                                                                        files_num++;
                                                                        file['id'] = files_num;
                                                                        console.log(file);
                                                                        uploaded_data.push(file);
                                                                        addFileToQueue(file, file['id']);
                                                                    }

                                                                    // Отображение выбраных файлов, создание миниатюр и ручное добавление в очередь загрузки.
                                                                    function addFileToQueue(file, file_id) {

                                                                        // Создаем элемент li и помещаем в него название, миниатюру и progress bar
                                                                        var li = $('<li/>').appendTo(imgList);
                                                                        /* var title = $('<div/>').text(file.name+' ').appendTo(li); */
                                                                        var cancelButton = $('<a/>').attr({
                                                                            href: '#cancel',
                                                                            title: 'отменить'
                                                                        }).html('<img height="15" width="15" alt="X" src="/img/deleteIcon.png">').appendTo(/* title */li);

                                                                        // Если браузер поддерживает выбор файлов (иначе передается специальный параметр fake,
                                                                        // обозночающий, что переданный параметр на самом деле лишь имитация настоящего File)
                                                                        if (!file.fake) {

                                                                            // Отсеиваем не картинки
                                                                            var imageType = /video.*/;
                                                                            var imageType2 = /image.*/;
                                                                            if (!file.type.match(imageType) && !file.type.match(imageType2)) {
                                                                                log('Файл отсеян: `' + file.name + '` (тип ' + file.type + ')');
                                                                                return true;
                                                                            }

                                                                            // Добавляем картинку и прогрессбар в текущий элемент списка
                                                                            var div = $('<div/>').addClass('photo_frame').attr('rel', '0').appendTo(li);
                                                                            var img = $('<img/>').appendTo(li);
                                                                            /* var pBar = $('<div/>').addClass('progress').attr('rel', '0').text('0%').appendTo(li); */
                                                                            // Создаем объект FileReader и по завершении чтения файла, отображаем миниатюру и обновляем
                                                                            // инфу обо всех файлах (только в браузерах, подерживающих FileReader)
                                                                            if ($.support.fileReading) {
                                                                                var reader = new FileReader();
                                                                                reader.onload = (function (aImg) {
                                                                                    return function (e) {

                                                                                        aImg.attr('src', e.target.result);

                                                                                        aImg.attr('height', 100);

                                                                                        aImg.attr('id', "upload_id_" + file_id);

                                                                                    };
                                                                                })(img);
                                                                                reader.readAsDataURL(file);
                                                                            }

                                                                            log('Картинка добавлена: `' + file.name + '` (' + Math.round(file.size / 1024) + ' Кб)');
                                                                            imgSize += file.size;
                                                                        } else {
                                                                            log('Файл добавлен: ' + file.name);
                                                                        }

                                                                        imgCount++;
                                                                        updateInfo();

                                                                        // Создаем объект загрузки
                                                                        var uploadItem = {
                                                                            file: file,
                                                                            /*  onProgress: function(percents) {
                                                                             updateProgress(pBar, percents);
                                                                             }, */
                                                                            onComplete: function (successfully, data, errorCode) {

                                                                                if (successfully) {


                                                                                    log('Файл `' + this.file.name + '` загружен, полученные данные:<br/>*****<br/>' + data + '<br/>*****');


                                                                                } else {
                                                                                    if (!this.cancelled) {
                                                                                        log('<span style="color:red;">Файл `' + this.file.name + '`: ошибка при загрузке. Код: ' + errorCode + '</span>');
                                                                                    }
                                                                                }
                                                                            }
                                                                        };

                                                                        // ... и помещаем его в очередь
                                                                        var queueId = fileInput.damnUploader('addItem', uploadItem);

                                                                        // обработчик нажатия ссылки "отмена"
                                                                        cancelButton.click(function () {
                                                                            fileInput.damnUploader('cancel', queueId);
                                                                            li.remove();
                                                                            imgCount--;
                                                                            imgSize -= file.fake ? 0 : file.size;
                                                                            updateInfo();
                                                                            log(file.name + ' удален из очереди');
                                                                            return false;
                                                                        });

                                                                        return uploadItem;
                                                                    }


                                                                    ////////////////////////////////////////////////////////////////////////////
                                                                    // Обработчики событий


                                                                    // Обработка событий drag and drop при перетаскивании файлов на элемент dropBox
                                                                    dropBox.bind({
                                                                        dragenter: function () {
                                                                            $(this).addClass('highlighted');
                                                                            return false;
                                                                        },
                                                                        dragover: function () {
                                                                            return false;
                                                                        },
                                                                        dragleave: function () {
                                                                            $(this).removeClass('highlighted');
                                                                            return false;
                                                                        }
                                                                    });

                                                                    var nums_iter = 0;

                                                                    function damnStart(files, int, count) {
                                                                        if (nums_iter < count) {
                                                                            fileInput.damnUploader('clear');
                                                                            fileInput.damnUploader('addItem', {
                                                                                file: files[int],
                                                                                onProgress: function () {
                                                                                    $("#upload_id_" + files[int]['id']).parent().append('<div class="loader" style="position: relative;"><img src="/img/loading2.gif" style="position: absolute; left: 0; right: 0; bottom: 0; margin: auto; width: 100px;"></div>');
                                                                                    $("#upload_id_" + files[int]['id']).parent().find(".loader").fadeIn("300");
                                                                                },
                                                                                onComplete: function (successfully, data, errorCode) {
                                                                                    if (successfully) {
                                                                                        log('Файл `' + files[int].name + '` загружен, полученные данные:<br/>*****<br/>' + data + '<br/>*****');
                                                                                    } else {
                                                                                        if (!this.cancelled) {
                                                                                            log('<span style="color:red;">Файл `' + files[int].name + '`: ошибка при загрузке. Код: ' + errorCode + '</span>');
                                                                                        }
                                                                                    }
                                                                                    $("#upload_id_" + files[int]['id']).parent().find(".loader").fadeOut("300");
                                                                                    setTimeout(function () {
                                                                                        nums_iter = nums_iter + 1;
                                                                                        damnStart(files, nums_iter, count);
                                                                                    }, 2000);
                                                                                }
                                                                            });
                                                                            fileInput.damnUploader('startUpload');
                                                                        } else if (nums_iter == count) {
                                                                            window.allcomplete = 1;

                                                                            log('<span style="color: white;">*** Все загрузки завершены! ***</span>');
                                                                            imgCount = 0;
                                                                            imgSize = 0;
                                                                            updateInfo();
                                                                        }
                                                                    }

                                                                    // Обаботка события нажатия на кнопку "Загрузить все".
                                                                    // стартуем все загрузки
                                                                    $(".apply_btn1").click(function () {
                                                                        var files_count = uploaded_data.length;
                                                                        damnStart(uploaded_data, 0, files_count);
                                                                    });


                                                                    // Обработка события нажатия на кнопку "Отменить все"
                                                                    $("#cancel-all4").click(function () {
                                                                        fileInput.damnUploader('cancelAll');
                                                                        imgCount = 0;
                                                                        imgSize = 0;
                                                                        updateInfo();
                                                                        log('*** Все загрузки отменены ***');
                                                                        imgList.empty();
                                                                    });


                                                                    // Обработка нажатия на тестовую канву
                                                                    /*     $(canvas).click(function() {
                                                                     var blobData;
                                                                     if (canvas.toBlob) {
                                                                     // ожидается, что вскоре браузерами будет поддерживаться метод toBlob() для объектов Canvas
                                                                     blobData = canvas.toBlob();
                                                                     } else {
                                                                     // ... а пока - конвертируем вручную из dataURI
                                                                     blobData = dataURItoBlob(canvas.toDataURL('image/png'));
                                                                     }
                                                                     if (blobData === false) {
                                                                     log("Ваш браузер не поддерживает BlobBuilder");
                                                                     return ;
                                                                     }
                                                                     addFileToQueue(blobData)
                                                                     }); */


                                                                    ////////////////////////////////////////////////////////////////////////////
                                                                    // Проверка поддержки File API, FormData и FileReader

                                                                    if (!$.support.fileSelecting) {
                                                                        log('Ваш браузер не поддерживает выбор файлов (загрузка будет осуществлена обычной отправкой формы)');
                                                                        $("#dropBox-label").text('если бы ты использовал хороший браузер, файлы можно было бы перетаскивать прямо в область ниже!');
                                                                    } else {
                                                                        if (!$.support.fileReading) {
                                                                            log('* Ваш браузер не умеет читать содержимое файлов (миниатюрки не будут показаны)');
                                                                        }
                                                                        if (!$.support.uploadControl) {
                                                                            log('* Ваш браузер не умеет следить за процессом загрузки (progressbar не работает)');
                                                                        }
                                                                        if (!$.support.fileSending) {
                                                                            log('* Ваш браузер не поддерживает объект FormData (отправка с ручной формировкой запроса)');
                                                                        }
                                                                        log('Выбор файлов поддерживается');
                                                                    }
                                                                    log('*** Проверка поддержки ***');
                                                                });
                                                            </script>

                                                        </div>
                                                    </div>
                                                </div>

                                                <ul class="pager wizard m-b-0">
                                                    <li class="previous">
                                                        <a href="#" class="btn btn-primary waves-effect waves-light">Previous</a>
                                                    </li>
                                                    <li class="next">
                                                        <a href="#" class="btn btn-primary waves-effect waves-light">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div><!-- end row -->
                    </div>
                </div><!-- end col -->
            </div>


        </div>
        <!--===================================================-->
        <!--End page content-->


    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->





