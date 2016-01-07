<footer class="main-footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>&copy; Максим Барсуков</p>

            </div>
            <div class="col-sm-12">
                <div class="social-wrap">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                        <li><a href="#"><i class="fa fa-github	"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- Здесь пишем код -->

<div class="hidden"></div>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri()?>/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/libs/respond/respond.min.js"></script>
<![endif]-->

<!-- Load CSS -->
<script>

    //Header Styles (compress & paste to header after release)
    var ms=document.createElement("link");ms.rel="stylesheet";
    ms.href="<?php echo get_template_directory_uri()?>/header.css";document.getElementsByTagName("head")[0].appendChild(ms);

    //User Styles + Media Queries
    var ms=document.createElement("link");ms.rel="stylesheet";
    ms.href="<?php echo get_template_directory_uri()?>/main.css";document.getElementsByTagName("head")[0].appendChild(ms);

    //User Styles + Media Queries
    var ms=document.createElement("link");ms.rel="stylesheet";
    ms.href="<?php echo get_template_directory_uri()?>/libs/linea_basic/styles.css";document.getElementsByTagName("head")[0].appendChild(ms);

</script>

<script src="<?php echo get_template_directory_uri()?>/libs/jquery/jquery-2.1.4.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/libs.js"></script>
<script src="<?php echo get_template_directory_uri()?>/libs/modernizr/modernizr.js"></script>
<script src="<?php echo get_template_directory_uri()?>/libs/jqBootstrapValidation/jqBootstrapValidation.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/common.js"></script>
<!-- Load Scripts -->
<script>
    var scr = {"scripts":[
        {"src" : "<?php echo get_template_directory_uri()?>/libs/animate/animate-css.js", "async" : false},
        {"src" : "<?php echo get_template_directory_uri()?>/libs/plugins-scroll/plugins-scroll.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
<?php wp_footer()?>
</body>
</html>

