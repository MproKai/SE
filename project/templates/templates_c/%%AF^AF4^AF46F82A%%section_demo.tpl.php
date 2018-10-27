<?php /* Smarty version 2.6.19, created on 2018-10-28 04:44:51
         compiled from section_demo.tpl */ ?>
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
    .custom_circle_pic{
        height: 160px;
        width: 160px;
    }

 </style>
 '; ?>

 <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="images/bg-pic2.png" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main" >
                <div id="title"><h1>Tell us what you need!</h1></div>

                    <form id="request-form" class="group mc-form" novalidate="true"> 
                        <input type="text" style="font-family: 'Microsoft JhengHei'"  id="demo_final_span" placeholder="Type or speak your demands..." required="" class="final">
                        
                        <span id="demo_interim_span" class="interim"></span>
                        <input type="button" value="Send" onclick="send_request_multiple()" style="margin: 0px" />
                        <a id="demo_start_button" onclick="demo_startButton(event)">
                            <i id="demo_start_img"  class="fa fa-microphone fa-3x speech" style="position: absolute;top: 10px; right: 110px;"></i>
                        </a>
                       <!--  <a onclick="end_speech()"><i id="end_speech"  class="fa fa-microphone-slash fa-3x speech" style="position: absolute;top: 10px; right: 110px;display: none;"></i></a> -->
                        <div id="demo_info">
                          <p id="demo_info_start">Click on the microphone icon and begin speaking.</p>
                          <p id="demo_info_speak_now">Speak now.</p>
                          <p id="demo_info_no_speech">No speech was detected. You may need to adjust your
                            <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                              microphone settings</a>.</p>
                          <p id="demo_info_no_microphone" style="display:none">
                            No microphone was found. Ensure that a microphone is installed and that
                            <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                            microphone settings</a> are configured correctly.</p>
                          <p id="demo_info_allow">Click the "Allow" button above to enable your microphone.</p>
                          <p id="demo_info_denied">Permission to use microphone was denied.</p>
                          <p id="demo_info_blocked">Permission to use microphone is blocked. To change,
                            go to chrome://settings/contentExceptions#media-stream</p>
                          <p id="demo_info_upgrade">Web Speech API is not supported by this browser.
                             Upgrade to <a href="//www.google.com/chrome">Chrome</a>
                             version 25 or later.</p>
                        </div>
                    </form>


                    <div id="area_multiple" class="setofont" style="font-family: 'Microsoft JhengHei'">
                        <div class="col-lg-4">                          
                            <div class="text-center">
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="img/a2.jpg">
                                <div class="m-t-xs font-bold">Graphics designer</div>
                            </div> 
                      </div>
                    </div>

<!--                 <div class="home-content__button">
                    <a href="#about" class="smoothscroll btn btn-animatedbg">
                        More About Us
                    </a>
                </div> -->

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



var demo_create_email = false;
var demo_final_transcript = \'\';
var demo_recognizing = false;
var demo_ignore_onend;
var demo_start_timestamp;
showdemo_Info(\'demo_info_start\');
if (!(\'webkitSpeechRecognition\' in window)) {
  upgrade();
} else {
  demo_start_button.style.display = \'inline-block\';
  var demo_recognition = new webkitSpeechRecognition();
  demo_recognition.continuous = true;
  demo_recognition.interimResults = true;

  demo_recognition.onstart = function() {
    demo_recognizing = true;
    showdemo_Info(\'demo_info_speak_now\');
    $(\'#demo_start_img\').attr(\'class\' , \'fa fa-microphone-slash fa-3x speech\');
  };

  demo_recognition.onerror = function(event) {
    if (event.error == \'no-speech\') {
      //demo_start_img.class = \'fa fa-microphone fa-3x speech\';
      $(\'#demo_start_img\').attr(\'class\' , \'fa fa-microphone fa-3x speech\');
      showdemo_Info(\'demo_info_no_speech\');
      demo_ignore_onend = true;
    }
    if (event.error == \'audio-capture\') {
      //demo_start_img.class = \'fa fa-microphone fa-3x speech\';
      $(\'#demo_start_img\').attr(\'class\' , \'fa fa-microphone fa-3x speech\');
      showdemo_Info(\'demo_info_no_microphone\');
      demo_ignore_onend = true;
    }
    if (event.error == \'not-allowed\') {
      if (event.timeStamp - demo_start_timestamp < 100) {
        showdemo_Info(\'demo_info_blocked\');
      } else {
        showdemo_Info(\'demo_info_denied\');
      }
      demo_ignore_onend = true;
    }
  };

  demo_recognition.onend = function() {
    demo_recognizing = false;
    if (demo_ignore_onend) {
      return;
    }
    $(\'#demo_start_img\').attr(\'class\' , \'fa fa-microphone fa-3x speech\');
    //demo_start_img.class = \'fa fa-microphone fa-3x speech\';
    if (!demo_final_transcript) {
      showdemo_Info(\'demo_info_start\');
      return;
    }
    showdemo_Info(\'\');
    if (window.getSelection) {
      window.getSelection().removeAllRanges();
      var range = document.createRange();
      range.selectNode(document.getElementById(\'demo_final_span\'));
      window.getSelection().addRange(range);
    }
    if (demo_create_email) {
      demo_create_email = false;
      createEmail();
    }
  };

  demo_recognition.onresult = function(event) {
    var interim_transcript = \'\';
    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
        demo_final_transcript += event.results[i][0].transcript;
      } else {
        interim_transcript += event.results[i][0].transcript;
      }
    }
    demo_final_transcript = capitalize(demo_final_transcript);
    demo_final_span.value = linebreak(demo_final_transcript);
    demo_interim_span.innerHTML = linebreak(interim_transcript);
    if (demo_final_transcript || interim_transcript) {
      showButtons(\'inline-block\');
    }
  };
}

function upgrade() {
  demo_start_button.style.visibility = \'hidden\';
  showdemo_Info(\'demo_info_upgrade\');
}

var two_line = /\\n\\n/g;
var one_line = /\\n/g;
function linebreak(s) {
  return s.replace(two_line, \'<p></p>\').replace(one_line, \'<br>\');
}

var first_char = /\\S/;
function capitalize(s) {
  return s.replace(first_char, function(m) { return m.toUpperCase(); });
}

function createEmail() {
  var n = demo_final_transcript.indexOf(\'\\n\');
  if (n < 0 || n >= 80) {
    n = 40 + demo_final_transcript.substring(40).indexOf(\' \');
  }
  var subject = encodeURI(demo_final_transcript.substring(0, n));
  var body = encodeURI(demo_final_transcript.substring(n + 1));
  window.location.href = \'mailto:?subject=\' + subject + \'&body=\' + body;
}

function copyButton() {
  if (demo_recognizing) {
    demo_recognizing = false;
    recognition.stop();
  }
  //copy_button.style.display = \'none\';
  //copy_demo_info.style.display = \'inline-block\';
  showdemo_Info(\'\');
}

// function emailButton() {
//   if (demo_recognizing) {
//     demo_create_email = true;
//     demo_recognizing = false;
//     recognition.stop();
//   } else {
//     createEmail();
//   }
//   email_button.style.display = \'none\';
//   email_demo_info.style.display = \'inline-block\';
//   showdemo_Info(\'\');
// }

function demo_startButton(event) {
  if (demo_recognizing) {
    demo_recognition.stop();
    return;
  }
  demo_final_transcript = \'\';
  demo_recognition.lang = \'cmn-Hant-TW\';
  demo_recognition.start();
  demo_ignore_onend = false;
  demo_final_span.value = \'\';
  demo_interim_span.innerHTML = \'\';
  //demo_start_img.class = \'mic-slash.gif\';
  $(\'#demo_start_img\').attr(\'class\' , \'fa fa-microphone-slash fa-3x speech\');
  showdemo_Info(\'demo_info_allow\');
  showButtons(\'none\');
  demo_start_timestamp = event.timeStamp;
}

function showdemo_Info(s) {
  if (s) {
    for (var child = demo_info.firstChild; child; child = child.nextSibling) {
      if (child.style) {
        child.style.display = child.id == s ? \'inline\' : \'none\';
      }
    }
    demo_info.style.visibility = \'visible\';
  } else {
    demo_info.style.visibility = \'hidden\';
  }
}

var current_style;
function showButtons(style) {
  if (style == current_style) {
    return;
  }
  current_style = style;
  //copy_button.style.display = style;
  //email_button.style.display = style;
  //copy_demo_info.style.display = \'none\';
  //email_demo_info.style.display = \'none\';
}

</script>
'; ?>