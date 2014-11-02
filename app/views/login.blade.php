<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>Biblioteca Digital</title> 

    <meta charset="utf-8">

    {{ HTML::style('assets/css/style.css"') }}
    {{ HTML::style('assets/css/bootstrap.css') }}

    {{ HTML::script('assets/js/jquery-1.11.1.min.js') }}
    {{ HTML::script('assets/js/bootstrap.js') }}

    {{ HTML::style('assets/css/jquery.dataTables.css') }}
    {{ HTML::style('assets/css/dataTables.bootstrap.css') }}

    {{ HTML::script('assets/js/jquery.dataTables.min.js') }}
    {{ HTML::script('assets/js/dataTables.bootstrap.js') }}
    {{ HTML::script('assets/js/formMasc.js') }}
 
        <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
        <style type="text/css">
        /**
         * parallax.css
         * @Author Original @msurguy -> http://bootsnipp.com/snippets/featured/parallax-login-form
         * @Reworked By @kaptenn_com 
         * @package PARALLAX LOGIN.
         */
            
            body {
                background-color: #444;
                background: url(http://s18.postimg.org/l7yq0ir3t/pick8_1.jpg);
                
            }
            .form-signin input[type="text"] {
                margin-bottom: 5px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }
            .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            .form-signin .form-control {
                position: relative;
                font-size: 16px;
                font-family: 'Open Sans', Arial, Helvetica, sans-serif;
                height: auto;
                padding: 10px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            .vertical-offset-100 {
                padding-top: 100px;
            }
            .img-responsive {
            display: block;
            max-width: 100%;
            height: auto;
            margin: auto;
            }
            .panel {
            margin-bottom: 20px;
            background-color: rgba(255, 255, 255, 0.75);
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            }
        </style>
        <body>
            <div class="body">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row text-center">
                                    {{ HTML::image('/img/pronatec.jpg', 'Logomarca', array('class' => 'img', 'width' => '200px')) }}
                                </div>
                            </div>
                            <div class="panel-body">
                                <!--login erros-->
                                  {{ HTML::ul($errors->all()) }}
                              <!--login erros-->
                                {{ Form::open([
                                  "url" => 'logon',
                                  "autocomplete" => "on",
                                  "class" => "form-signin"
                                ]) }}
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Usuário" id="username" name="username" type="text" autofocus="autofocus" >
                                        <input class="form-control" placeholder="Senha" id="password" name="password" type="password">
                                        <br></br>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Login »">
                                    </fieldset>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
    <script type="text/javascript">
    $(document).ready(function() {
        $(document).mousemove(function(event) {
            TweenLite.to($("body"), 
            .5, {
                css: {
                    backgroundPosition: "" + parseInt(event.pageX / 8) + "px " + parseInt(event.pageY / '12') + "px, " + parseInt(event.pageX / '15') + "px " + parseInt(event.pageY / '15') + "px, " + parseInt(event.pageX / '30') + "px " + parseInt(event.pageY / '30') + "px",
                    "background-position": parseInt(event.pageX / 8) + "px " + parseInt(event.pageY / 12) + "px, " + parseInt(event.pageX / 15) + "px " + parseInt(event.pageY / 15) + "px, " + parseInt(event.pageX / 30) + "px " + parseInt(event.pageY / 30) + "px"
                }
            })
        })
    })
    </script>
            