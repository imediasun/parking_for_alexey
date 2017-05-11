
<div id="menu_line" class="menu_line_closed" style="overflow:hidden">
    <div class="menu_icon_block">
        <div class="menu-icon">
            <span></span>
        </div>
    </div>
    <div class="menu_item_block" style="position:relative;">
        <div class="icon" style="left:15px;;position:relative;background:url('/img/jobs.png');background-size:contain;width:30px;height:30px;margin-top:5px;margin-left:5px;"></div>
        <h3 style="position:absolute;color:#fff;left:80px;top:0px;">My Jobs</h3>
    </div>

</div>
<div>
    <div class="indigo_logo">

    </div>

    <style>
        /*
          menu icon css3
        */
        .menu_icon_block{
            border-bottom:1px #eee solid;
            height:70px;
        }
        .menu_item_block{
            border-bottom:1px #eee solid;
            height:40px;
        }
        .menu-icon {
            float:left;
            padding-left:10px;
            position: relative;
            top: 10px;
            display: block;
            width: 4em;
            height: 4em;
            cursor: pointer;
            /* to center */
            margin: 0 auto;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .menu-icon > span {
            position: absolute;
            top: 50%;
            display: block;
            width: 100%;
            height: 0.5em;
            margin-top: -0.5em;
            background-color: #fff;
            border-radius: 3px;
        }

        .menu-icon > span:before,
        .menu-icon > span:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #fff;
            border-radius: 3px;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .menu-icon > span:before {
            -webkit-transform: translateY(-1em);
            transform: translateY(-1em);
        }

        .menu-icon > span:after {
            -webkit-transform: translateY(1em);
            transform: translateY(1em);
        }

        /* OPENED */

        .menu-icon.open {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .menu-icon.open > span:before {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .menu-icon.open > span:after {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }
        .menu_line_opened{
            width:300px;
        }
        .menu_line_closed{
            width:75px;
        }
    </style>
    <script>


        window.menu_2=1;/*menu closed*/
        console.log(window.menu_2);
        $('.menu-icon').click(function(){

            $( this ).toggleClass( "open" );
            if(window.menu_2==1){
                $('#menu_line').css({width:"300px"});
                window.menu_2=0;
            }
            else{
                $('#menu_line').css({width:"75px"});
                window.menu_2=1;
            }


        })
    </script>
</div>

</div><!-- #wrapper2 -->