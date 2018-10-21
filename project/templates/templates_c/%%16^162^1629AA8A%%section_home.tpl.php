<?php /* Smarty version 2.6.19, created on 2018-10-21 12:21:02
         compiled from section_home.tpl */ ?>
 <?php echo '
 <style type="text/css">
   .speech
    {
       color:#F26522
    }
    .speech:hover
    {
      color:white;
    }


 </style>
 '; ?>

 <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main" >
                <h1>Tell us what you need!</h1>

                    <form id="request-form" class="group mc-form" novalidate="true"> 
                        <input type="text" style="font-family: 'Microsoft JhengHei'"  id="mc-request" placeholder="Type or speak your demands..." required="">
                        <input type="button" value="Send" onclick="send_request()" />
                        <h3><div id="api-response" class="setofont" style="display: none;font-family: 'Microsoft JhengHei'"></div></h3>
                        <label for="mc-email" class="subscribe-message"></label>
                        <a onclick="start_speech()"><i id="start_speech"  class="fa fa-microphone fa-3x speech" style="position: absolute;top: 10px; right: 110px;"></i></a>
                        <a onclick="end_speech()"><i id="end_speech"  class="fa fa-microphone-slash fa-3x speech" style="position: absolute;top: 10px; right: 110px;display: none;"></i></a>
                    </form>
                <div class="home-content__button">
                    <a href="#about" class="smoothscroll btn btn-animatedbg">
                        More About Us
                    </a>
                </div>


            </div> <!-- end home-content__main -->

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    Scroll
                </a>
            </div>

        </div> <!-- end home-content -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'menu_bar.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    </section> <!-- end s-home -->
<?php echo '
<script type="text/javascript">

    function send_request(){
   
        var url = \'http://140.115.87.62:5000/preprocessing/\'+$(\'#mc-request\').val();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               // Typical action to be performed when the document is ready:
               $(\'#api-response\').show();
               $(\'#api-response\').html(xhttp.responseText);
            }
        };
        xhttp.open("GET", url, true);
        xhttp.send();
    }

    function start_speech(){
        $(\'#start_speech\').hide();
        $(\'#end_speech\').show();
    }

    function end_speech(){
        $(\'#end_speech\').hide();
        $(\'#start_speech\').show();
    }
</script>
'; ?>