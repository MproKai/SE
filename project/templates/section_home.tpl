     {literal}
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
 {/literal}
 <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="images/bg-pic.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main" >
                <div id="title"><h1>Tell us what you need!</h1></div>

                    <form id="request-form" class="group mc-form" novalidate="true"> 
                        <input type="text" style="font-family: 'Microsoft JhengHei'"  id="final_span" placeholder="Type or speak your demands..." required="" class="final">
                        
                        <span id="interim_span" class="interim"></span>
                        <input type="button" value="Send" onclick="send_request()" />
                        <h3>
                            <div id="api-response" class="setofont" style="display: none;font-family: 'Microsoft JhengHei'">
                                
                            </div>
                        </h3>
                        <label for="mc-email" class="subscribe-message"></label>
                        <a id="start_button" onclick="startButton(event)">
                            <i id="start_img"  class="fa fa-microphone fa-3x speech" style="position: absolute;top: 10px; right: 110px;"></i>
                        </a>
                       <!--  <a onclick="end_speech()"><i id="end_speech"  class="fa fa-microphone-slash fa-3x speech" style="position: absolute;top: 10px; right: 110px;display: none;"></i></a> -->
                    </form>
                <div id="info">
                  <p id="info_start">Click on the microphone icon and begin speaking.</p>
                  <p id="info_speak_now">Speak now.</p>
                  <p id="info_no_speech">No speech was detected. You may need to adjust your
                    <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                      microphone settings</a>.</p>
                  <p id="info_no_microphone" style="display:none">
                    No microphone was found. Ensure that a microphone is installed and that
                    <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                    microphone settings</a> are configured correctly.</p>
                  <p id="info_allow">Click the "Allow" button above to enable your microphone.</p>
                  <p id="info_denied">Permission to use microphone was denied.</p>
                  <p id="info_blocked">Permission to use microphone is blocked. To change,
                    go to chrome://settings/contentExceptions#media-stream</p>
                  <p id="info_upgrade">Web Speech API is not supported by this browser.
                     Upgrade to <a href="//www.google.com/chrome">Chrome</a>
                     version 25 or later.</p>
                </div>
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
        {include file='menu_bar.tpl'}

    </section> <!-- end s-home -->
{literal}
<script type="text/javascript">

    function send_request(){
   
        var url = 'http://172.16.0.46:5000/preprocessing/'+$('#final_span').val();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               // Typical action to be performed when the document is ready:
               $('#api-response').show();
               var arr = JSON.parse(xhttp.responseText)
               
               get_pic_by_list(arr);
            }
        };
        xhttp.open("GET", url, true);
        xhttp.send();
    }
    // this function needs input an array that like ['cream' , 'vegatables' , 'pasta']
    function get_pic_by_list(arr){
       // var tmp_arr = ['cream' , 'vegatables' , 'pasta'];
        
        $('#api-response').show();
        $('#title').hide();
        arr.forEach(function(element){
            $('#api-response').append('<img src="images/'+element+'.jpg" class="img-circle circle-border m-b-md custom_circle_pic" >&nbsp;&nbsp;&nbsp;');
        });
    }

    // function start_speech(){
    //     $('#start_speech').hide();
    //     $('#end_speech').show();

    // }

    // function end_speech(){
    //     $('#end_speech').hide();
    //     $('#start_speech').show();
    // }





var create_email = false;
var final_transcript = '';
var recognizing = false;
var ignore_onend;
var start_timestamp;
showInfo('info_start');
if (!('webkitSpeechRecognition' in window)) {
  upgrade();
} else {
  start_button.style.display = 'inline-block';
  var recognition = new webkitSpeechRecognition();
  recognition.continuous = true;
  recognition.interimResults = true;

  recognition.onstart = function() {
    recognizing = true;
    showInfo('info_speak_now');
    $('#start_img').attr('class' , 'fa fa-microphone-slash fa-3x speech');
  };

  recognition.onerror = function(event) {
    if (event.error == 'no-speech') {
      //start_img.class = 'fa fa-microphone fa-3x speech';
      $('#start_img').attr('class' , 'fa fa-microphone fa-3x speech');
      showInfo('info_no_speech');
      ignore_onend = true;
    }
    if (event.error == 'audio-capture') {
      //start_img.class = 'fa fa-microphone fa-3x speech';
      $('#start_img').attr('class' , 'fa fa-microphone fa-3x speech');
      showInfo('info_no_microphone');
      ignore_onend = true;
    }
    if (event.error == 'not-allowed') {
      if (event.timeStamp - start_timestamp < 100) {
        showInfo('info_blocked');
      } else {
        showInfo('info_denied');
      }
      ignore_onend = true;
    }
  };

  recognition.onend = function() {
    recognizing = false;
    if (ignore_onend) {
      return;
    }
    $('#start_img').attr('class' , 'fa fa-microphone fa-3x speech');
    //start_img.class = 'fa fa-microphone fa-3x speech';
    if (!final_transcript) {
      showInfo('info_start');
      return;
    }
    showInfo('');
    if (window.getSelection) {
      window.getSelection().removeAllRanges();
      var range = document.createRange();
      range.selectNode(document.getElementById('final_span'));
      window.getSelection().addRange(range);
    }
    if (create_email) {
      create_email = false;
      createEmail();
    }
  };

  recognition.onresult = function(event) {
    var interim_transcript = '';
    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
        final_transcript += event.results[i][0].transcript;
      } else {
        interim_transcript += event.results[i][0].transcript;
      }
    }
    final_transcript = capitalize(final_transcript);
    final_span.value = linebreak(final_transcript);
    interim_span.innerHTML = linebreak(interim_transcript);
    if (final_transcript || interim_transcript) {
      showButtons('inline-block');
    }
  };
}

function upgrade() {
  start_button.style.visibility = 'hidden';
  showInfo('info_upgrade');
}

var two_line = /\n\n/g;
var one_line = /\n/g;
function linebreak(s) {
  return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
}

var first_char = /\S/;
function capitalize(s) {
  return s.replace(first_char, function(m) { return m.toUpperCase(); });
}

function createEmail() {
  var n = final_transcript.indexOf('\n');
  if (n < 0 || n >= 80) {
    n = 40 + final_transcript.substring(40).indexOf(' ');
  }
  var subject = encodeURI(final_transcript.substring(0, n));
  var body = encodeURI(final_transcript.substring(n + 1));
  window.location.href = 'mailto:?subject=' + subject + '&body=' + body;
}

function copyButton() {
  if (recognizing) {
    recognizing = false;
    recognition.stop();
  }
  //copy_button.style.display = 'none';
  //copy_info.style.display = 'inline-block';
  showInfo('');
}

function emailButton() {
  if (recognizing) {
    create_email = true;
    recognizing = false;
    recognition.stop();
  } else {
    createEmail();
  }
  email_button.style.display = 'none';
  email_info.style.display = 'inline-block';
  showInfo('');
}

function startButton(event) {
  if (recognizing) {
    recognition.stop();
    return;
  }
  final_transcript = '';
  recognition.lang = 'cmn-Hant-TW';
  recognition.start();
  ignore_onend = false;
  final_span.value = '';
  interim_span.innerHTML = '';
  //start_img.class = 'mic-slash.gif';
  $('#start_img').attr('class' , 'fa fa-microphone-slash fa-3x speech');
  showInfo('info_allow');
  showButtons('none');
  start_timestamp = event.timeStamp;
}

function showInfo(s) {
  if (s) {
    for (var child = info.firstChild; child; child = child.nextSibling) {
      if (child.style) {
        child.style.display = child.id == s ? 'inline' : 'none';
      }
    }
    info.style.visibility = 'visible';
  } else {
    info.style.visibility = 'hidden';
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
  //copy_info.style.display = 'none';
  //email_info.style.display = 'none';
}
</script>
{/literal}