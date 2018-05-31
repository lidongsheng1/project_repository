<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="{{asset('/home/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('/home/js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{asset('/home/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />  
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<link href='https://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="{{asset('home/css/component.css')}}" />
</head>
<body>
 <div class="header">

        <nav class="navbar navbar-default animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
        <div class="container">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control form-cont" value="Search" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Search';}">
        </div>
        <button type="submit" class="btn-search"></button>
      </form>
         <ul class="nav navbar-nav cl-effect-8">
            <li ><a id="home" href="\">Home</a></li>
            <li><a id="question" href="{{action('home\QuestionController@index')}}">Question</a></li>
             <li><a id="topic" href="{{action('home\TopicsController@index')}}">Topic</a></li>
              <li><a href="typo.html">Article</a></li>
            @if(Auth::user())
                <li>
                  <a href="{{route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
            @else
                <li><a id="tologin" href="#login"  data-toggle="modal" data-target="#login" data-whatever="@mdo">Login</a></li>
                <li><a id="toregister" href="#register"  data-toggle="modal" data-target="#register" data-whatever="@mdo">register</a></li>
            @endif
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
      </div>
    </nav>
    <!-- start search-->
    
            
        <div class="logo animated wow shake" data-wow-duration="1000ms" data-wow-delay="500ms">

            @if(Auth::user())
                <a href="{{action('home\UserController@show',['id'=>Auth::id()])}}" style="font-size:50px">
                    {{Auth::user()->name}}
                </a>
            @else
                <a href="javascript:;" style="font-size:50px">Question Blog</a>
            @endif
        </div>
        <div class="banner animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
        <p>select or update your description</p>
            <a class="hvr-sweep-to-bottom" id="toregister" href="#CreateQuestion"  data-toggle="modal" data-target="#CreateQuestion" data-whatever="@mdo" >Create Question</a>
            <a id="toregister" href="#CreateTopic"  data-toggle="modal" data-target="#CreateTopic" data-whatever="@mdo" class="hvr-sweep-to-bottom">Create Topic</a>
            <a id="toregister" href="#CreateArticle"  data-toggle="modal" data-target="#CreateArticle" data-whatever="@mdo" class="hvr-sweep-to-bottom">Create Article</a>
        <label></label>
        </div>
    </div> 

 @yield('content')
<!--footer-->
    <div class="footer">
        <div class="footer-middle">
            <div class="container">
                <div class="col-md-4 footer-middle-in animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <h6>Tags</h6>
                        <ul class="tag-in">
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Sed</a></li>
                            <li><a href="#">Ipsum</a></li>
                            <li><a href="#">Contrary</a></li>
                            <li><a href="#">Chunk</a></li>
                            <li><a href="#">Amet</a></li>
                            <li><a href="#">Omnis</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 footer-middle-in animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <h6>Information</h6>
                        <ul class=" in">
                            <li><a href="about.html">About</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="typo.html">Short Codes</a></li>
                        </ul>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 footer-middle-in animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <h6>Newsletter</h6>
                        <span>Sign up for Newsletter</span>
                            <form>
                                <input type="text" value="Enter your E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter your E-mail';}">
                                <input type="submit" value="Subscribe"> 
                            </form>
                    </div>
                    
                    <div class="clearfix"> </div>
                     <div class="footer-bottom-top component">
                    <ul class="social-ic">
                        <li><a href="#"><i></i></a></li>
                        <li><a href="#"><i class="ic"></i></a></li>
                        <li><a href="#"><i class="ic1"></i></a></li>
                        <li><a href="#"><i class="ic2"></i></a></li>
                        <li><a href="#"><i class="ic3"></i></a></li>
                    </ul>

                </div>

                    <p class="footer-class animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">JingGeGe</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">JingGege@qq.com</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--//footer-->


<!--login-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Login</h4>
      </div>
      <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
      <div class="modal-body">
        
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="recipient-name" class="control-label">Username or email:</label>
            <input type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus id="recipient-name">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="message-password" class="control-label">Password:</label>
            <input type="password" class="form-control" id="recipient-password" name="password" required >
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
      </div>
      <div class="modal-footer">
         <div class="form-group">
            <input type="submit" class="btn btn-primary">
          </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!--endlogin-->


<!--register-->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Register</h4>
      </div>
      <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
      <div class="modal-body">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="control-label">Username:</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus id="name">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('email1') ? ' has-error' : '' }}">
            <label for="email" class="control-label">email:</label>
            <input type="text" class="form-control" name="email1" value="{{ old('email1') }}" required autofocus id="email">
            @if ($errors->has('email1'))
                <span class="help-block">
                    <strong>{{ $errors->first('email1') }}</strong>
                </span>
            @endif
          </div>
          <input id="CodeCacheKey" type="hidden" name="key" />
          <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <label for="phone" class="control-label">phone:</label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus id="phone">
            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <a id="sendCode" class="form-control btn btn-default">send code</a>
          </div>
          <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
            <label for="code" class="control-label">code:</label>
            <input type="text" class="form-control" name="code" value="{{ old('code') }}" required autofocus id="code">
            @if ($errors->has('code'))
                <span class="help-block">
                    <strong>{{ $errors->first('code') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="password1" class="control-label">Password:</label>
            <input type="password" class="form-control" id="password1" name="password1" required >
            @if ($errors->has('password1'))
                <span class="help-block">
                    <strong>{{ $errors->first('password1') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="password_confirmation" class="control-label">Confirm Password:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required >
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
          </div>
      </div>
      <div class="modal-footer">
         <div class="form-group">
            <input type="submit" class="btn btn-primary">
          </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!--endregister-->

<!--CreateQuestion-->
<div class="modal fade" id="CreateQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">CreateQuestion</h4>
      </div>
      <form method="POST" action="{{action('home\QuestionController@store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div class="modal-body" >
        
          <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title" class="control-label">Title:</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus id="title" placeholder="Insert Title" >
            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
              <label for="selects" class="control-label">Topic</label>
              <br />
              <select id="selects" class="form-control js-example-basic-multiple js-data-example-ajax" name="topics[]" multiple="multiple" required style="width:100%" >
                  <option value="AL">Alabama</option>
                  <option value="WY">Wyoming</option>
                  <option value="a">ddsadsa</option>
              </select>
          </div>
          <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label for="image" class="control-label">BackImage:</label>
            <input type="file" class="form-file" name="image" value="{{ old('image') }}" required autofocus id="image">
            @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="content" class="control-label">Content:</label>
            <input type="hidden" name="content" id="content">
            <div id="script" style="overflow:auto;">
            </div>
            <div id="editorBox">
            </div>
          </div>
      </div>
      <div class="modal-footer">
         <div class="form-group">
            <input type="submit" id="ravensb" value="Create" class="btn btn-primary">
          </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!--endCreateQuestion-->

<!--CreateTopic-->
<div class="modal fade" id="CreateTopic" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">CreateTopic</h4>
      </div>
      <form method="POST" action="{{action('home\TopicsController@store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div class="modal-body" >
        
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="topic" class="control-label">TopicName:</label>
            <input type="text" class="form-control" name="topic" value="{{ old('topic') }}" required autofocus id="topic" placeholder="Insert TopicName" >
            @if ($errors->has('topic'))
                <span class="help-block">
                    <strong>{{ $errors->first('topic') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('topic_image') ? ' has-error' : '' }}">
            <label for="topic_image" class="control-label">TopicImage:</label>
            <input type="file" class="form-file" name="topic_image" value="{{ old('topic_image') }}" required autofocus id="topic_image">
            @if ($errors->has('topic_image'))
                <span class="help-block">
                    <strong>{{ $errors->first('topic_image') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
              <label for="desc" class="control-label">Description</label>
              <input type="text" class="form-control" name="desc" value="{{ old('desc') }}" required autofocus id="desc" />
              @if ($errors->has('desc'))
                <span class="help-block">
                    <strong>{{ $errors->first('desc') }}</strong>
                </span>
            @endif
          </div>
      </div>
      <div class="modal-footer">
         <div class="form-group">
            <input type="submit" value="Create" class="btn btn-primary">
          </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!--endCreateTopic-->

<!--CreateArticle-->
<div class="modal fade" id="CreateArticle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">CreateArticle</h4>
      </div>
      <form method="POST" action="{{action('home\ArticleController@store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div class="modal-body" >
        
          <div class="form-group{{ $errors->has('article') ? ' has-error' : '' }}">
            <label for="article" class="control-label">Article:</label>
            <input type="text" class="form-control" name="article" value="{{ old('article') }}" required autofocus id="article" placeholder="Insert Title" >
            @if ($errors->has('article'))
                <span class="help-block">
                    <strong>{{ $errors->first('article') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
              <label for="selects" class="control-label">Topic</label>
              <br />
              <select id="selects" class="form-control js-example-basic-multiple js-data-example-ajax" name="articleTopics[]" multiple="multiple" required style="width:100%" >
                  <option value="AL">Alabama</option>
                  <option value="WY">Wyoming</option>
                  <option value="a">ddsadsa</option>
              </select>
          </div>
          <div class="form-group{{ $errors->has('article_image') ? ' has-error' : '' }}">
            <label for="article_image" class="control-label">BackImage:</label>
            <input type="file" class="form-file" name="article_image" value="{{ old('article_image') }}" required autofocus id="article_image">
            @if ($errors->has('article_image'))
                <span class="help-block">
                    <strong>{{ $errors->first('article_image') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="article_content" class="control-label">Content:</label>
            <input type="hidden" name="article_content" id="article_content">
            <div id="script" style="overflow:auto;">
            </div>
            <div id="editorBox">
            </div>
          </div>
      </div>
      <div class="modal-footer">
         <div class="form-group">
            <input type="submit" id="ravensbq" value="Create" class="btn btn-primary">
          </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!--endCreateArticle-->

<link href="{{asset('home/css/animate.min.css')}}" rel="stylesheet"> 
<script src="//unpkg.com/wangeditor/release/wangEditor.min.js"></script>
<script src="{{asset('home/js/wow.min.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
 new WOW().init();
</script>
<script type="text/javascript">

var E = window.wangEditor
var editor2 = new E('#script','#editorBox')
editor2.create()

$('#ravensb').click(function(){
    $("#content").val(editor2.txt.html());
});

$('#ravensbq').click(function(){
    $("#article_content").val(editor2.txt.html());
});

@foreach(array_keys($errors->toArray()) as $value)
    @if(in_array($value,['email','password']))
        $('#tologin').trigger('click');
        @break;
    @endif
    @if(in_array($value,['email1','password1','phone','code','key','name']))
        $('#toregister').trigger('click');
        @break;
    @endif
@endforeach

var time;
var num=20;

$("#sendCode").click(function(){
    var script=this;
    var phone=$('#phone').val();
    $.ajax({
        url:'/api/verificationcodes',
        data:{phone:phone},
        type:'post',
        dataType:'JSON',
        success:function($obj){
            if($obj.key){
                $('#CodeCacheKey').val($obj.key);
               $(script).attr('disabled',false);
                num=60;
                time=setInterval(function(){
                    num--;
                    $(script).html('请'+num+'秒后重试');
                    if(num==0){
                        clearInterval(time);
                        $(script).removeAttr('disabled');
                        $(script).html('sendCode');
                    }
                },1000); 
            }  
        }
    });
});
$('#{{isset($flag)?$flag:"home"}}').addClass("active");

</script>

<script type="text/javascript">
  function formatTopic (topic) {

      return "<div class='select2-result-repository clearfix'>" +

          "<div class='select2-result-repository__meta'>" +

          "<div class='select2-result-repository__title'>" +

          topic.name ? topic.name : "Laravel"   +

          "</div></div></div>";
  }


  function formatTopicSelection (topic) {
      console.log(topic);

      return topic.name || topic.text;
  }

  $(".js-example-basic-multiple").select2({

      tags: true,

      placeholder: 'Insert Correlation Topic',

      minimumInputLength: 2,

      ajax: {

          url: '/api/topic',

          dataType: 'json',

          delay: 250,

          data: function (params) {

              return {

                  query: params.term

              };

          },

          processResults: function (data, params) {
              console.log(data);
              return {
                results: data
              };
          },
          cache: true
      },

      templateResult: formatTopic,

      templateSelection: formatTopicSelection,

      escapeMarkup: function (markup) { return markup; }
  });

</script>
<!-- //animation-effect -->
</body>
</html>