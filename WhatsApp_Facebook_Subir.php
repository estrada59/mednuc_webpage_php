<!-- SCROLL UP -->
<a id="scroll-up" class="waves fa fa-angle-up"></a>

<a id="scroll-up-what" class="waves fa fa-whatsapp" ></a>

<!-- Messenger plugin del chat Code -->
<div id="fb-root"></div>

<!-- Your plugin del chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>
<!-- Script facebook -->
<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "107836614730369");
  chatbox.setAttribute("attribution", "biz_inbox");
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v10.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>