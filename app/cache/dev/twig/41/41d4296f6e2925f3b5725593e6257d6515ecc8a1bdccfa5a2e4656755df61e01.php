<?php

/* ::base.html.twig */
class __TwigTemplate_e8f038a0b15f69e7cf68bf0d130e0732073d395f2cb93b4423d47862dde54c47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300' rel='stylesheet' type='text/css' />
        <link href=\"http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css\" rel=\"stylesheet\" />
        <link href=\"http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css\" rel=\"stylesheet\" />
        <link href='http://fonts.googleapis.com/css?family=Almendra&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Amarante&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type='text/css' />
        

        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <script>
            var options = {};
            \$('a.popup').popup(options);
        </script> 








        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
    </head>

    <body>



        <div class=\"menu\">

            <!-- Menu icon -->
            <div class=\"icon-close\">
                <img src=\"http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/uber/close.png\">
            </div>   

            <ul>
                <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\">Strona Główna</a></li>

                <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("_resta");
        echo "\">Restauracja</a></li>

                <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("_oferta");
        echo "\">Pokoje</a></li>

                <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("_dojazd");
        echo "\">Dojazd</a></li>

                <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("_regul");
        echo "\">Regulamin</a></li>

                <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("_rezerwacja");
        echo "\">Rezerwacja</a></li>







                <ul>
                    </div>          

                    <div class=\"jumbotron\">

                        <div class=\"icon-menu\" id=\"TOP\">
                            <i class=\"fa fa-bars\"></i>
                            Menu
                        </div>



                        <div class=\"logo\">



                            <h1>Pensjonat \"Skalny Dworek\"</h1></br></br></br></br>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</br> Sed ac dapibus 
                                ipsum, eu mollis velit. Pellentesque finibus augue id eleifend volutpat. 
                                Nunc sollicitudin fermentum orci, vel interdum erat efficitur sed. Vestibulum mi 
                                eros, congue nec vestibulum sed, rutrum at enim. Aenean interdum et diam quis 
                                volutpat. Mauris urna nibh, hendrerit a magna nec, iaculis porta leo. 
                                Mauris risus purus, feugiat eu nulla eu, sodales efficitur nibh. </br></br></br>
                            </p>


                        </div>   

                    </div>






                ";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "



                <div class=\"neighborhood-guides\">
                    <div class=\"container\">

                        <div id=\"facebook_slider_widget\" style=\"display: none\"><script type=\"text/javascript\" src=\"http://webfrik.pl/widget/facebook_slider.html?fb_url=https://www.facebook.com/DavidGuetta&amp;fb_width=290&amp;fb_height=590&amp;fb_faces=true&amp;fb_stream=true&amp;fb_header=true&amp;fb_border=true&amp;fb_theme=light&amp;chx=787&amp;speed=FAST&amp;fb_pic=sign&amp;position=RIGHT\"></script></div>
                        <h2>Nasz pensjonat</h2>  </br>
                        <p>Nasz pensjonat jest najlepszy.</p>





                        <div class=\"col-md-4\">

                            <div class=\"thumbnail\">

                                <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\">


                            </div>


                            <div class=\"thumbnail\">

                                <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\">


                            </div>


                        </div>

                        <div class=\"col-md-4\">

                            <div class=\"thumbnail\">

                                <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\">


                            </div>


                            <div class=\"thumbnail\">

                                <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\">


                            </div>




                        </div>

                        <div class=\"col-md-4\">

                            <div class=\"thumbnail\">


                                <a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\" class=\"popup\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\"></a>
                                

                            </div>

                            <div class=\"thumbnail\">


                                <a href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\" class=\"popup\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\"></a>


                            </div>

                        </div>
                    </div>


                    <div class=\"learn-more\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <h3>RESTAURACJA</h3>
                                    <p>Mamy restauracje.</p>
                                    <p><a href=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("_resta");
        echo "\">Sprawdź MENU</a></p>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>POKOJE</h3>
                                    <p>W swojej ofecie mamy kilkadziesiąt pokoji.</p>
                                    <p><a href=\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("_oferta");
        echo "\">Sprawdź POKOJE</a></p>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>Kontakt</h3>
                                    <p>Przykładowy adres toplowdwa  1/2.
                                        Przykładowy adres toplowdwa  1/2.
                                        Przykładowy adres toplowdwa  1/2.
                                    </p>
                                    <p><a href=\"";
        // line 203
        echo $this->env->getExtension('routing')->getPath("_dojazd");
        echo "\">Sprawdź jak dojechać</a></p>
                                </div>  





                            </div>



                        </div>
                    </div>








                    <div class=\"alt2\">
                        <div class=\"container\">
                            <footer>
                                &copy; Marek Wnęk <br />
                                <a href=\"#TOP\">Wróć na górę</a>
                            </footer>
                        </div>
                    </div>


                    <div style=\"clear:both\"></div>


                    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/app.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/parsley/parsley-standalone.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/jquery.popup.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/parsley/parsley.extend.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/jquery.popup.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/jquery.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/basiccalendar.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
                    <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>






                    ";
        // line 255
        $this->displayBlock('javascripts', $context, $blocks);
        // line 261
        echo "
                    </body>
                    </html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
    }

    // line 104
    public function block_body($context, array $blocks = array())
    {
    }

    // line 255
    public function block_javascripts($context, array $blocks = array())
    {
        // line 256
        echo "



                    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 256,  396 => 255,  391 => 104,  385 => 34,  379 => 7,  372 => 261,  370 => 255,  358 => 246,  354 => 245,  350 => 244,  346 => 243,  342 => 242,  338 => 241,  334 => 240,  330 => 239,  326 => 238,  322 => 237,  285 => 203,  274 => 195,  266 => 190,  246 => 175,  233 => 167,  215 => 152,  204 => 144,  189 => 132,  178 => 124,  157 => 105,  155 => 104,  108 => 60,  103 => 58,  98 => 56,  93 => 54,  88 => 52,  83 => 50,  66 => 35,  64 => 34,  43 => 16,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*         <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />*/
/*         <link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300' rel='stylesheet' type='text/css' />*/
/*         <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet" />*/
/*         <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css" rel="stylesheet" />*/
/*         <link href='http://fonts.googleapis.com/css?family=Almendra&subset=latin,latin-ext' rel='stylesheet' type='text/css' />*/
/*         <link href='http://fonts.googleapis.com/css?family=Amarante&subset=latin,latin-ext' rel='stylesheet' type='text/css' />*/
/*         <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">*/
/*         <link href="{{asset('bundles/expenses/css/style.css')}}" rel="stylesheet" type='text/css' />*/
/*         */
/* */
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/* */
/*         <script>*/
/*             var options = {};*/
/*             $('a.popup').popup(options);*/
/*         </script> */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         {%block stylesheets %} {%endblock%}*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/* */
/* */
/* */
/*         <div class="menu">*/
/* */
/*             <!-- Menu icon -->*/
/*             <div class="icon-close">*/
/*                 <img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/uber/close.png">*/
/*             </div>   */
/* */
/*             <ul>*/
/*                 <li><a href="{{ path('_homepage') }}">Strona Główna</a></li>*/
/* */
/*                 <li><a href="{{ path('_resta') }}">Restauracja</a></li>*/
/* */
/*                 <li><a href="{{ path('_oferta') }}">Pokoje</a></li>*/
/* */
/*                 <li><a href="{{ path('_dojazd') }}">Dojazd</a></li>*/
/* */
/*                 <li><a href="{{ path('_regul') }}">Regulamin</a></li>*/
/* */
/*                 <li><a href="{{ path('_rezerwacja') }}">Rezerwacja</a></li>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                 <ul>*/
/*                     </div>          */
/* */
/*                     <div class="jumbotron">*/
/* */
/*                         <div class="icon-menu" id="TOP">*/
/*                             <i class="fa fa-bars"></i>*/
/*                             Menu*/
/*                         </div>*/
/* */
/* */
/* */
/*                         <div class="logo">*/
/* */
/* */
/* */
/*                             <h1>Pensjonat "Skalny Dworek"</h1></br></br></br></br>*/
/* */
/*                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</br> Sed ac dapibus */
/*                                 ipsum, eu mollis velit. Pellentesque finibus augue id eleifend volutpat. */
/*                                 Nunc sollicitudin fermentum orci, vel interdum erat efficitur sed. Vestibulum mi */
/*                                 eros, congue nec vestibulum sed, rutrum at enim. Aenean interdum et diam quis */
/*                                 volutpat. Mauris urna nibh, hendrerit a magna nec, iaculis porta leo. */
/*                                 Mauris risus purus, feugiat eu nulla eu, sodales efficitur nibh. </br></br></br>*/
/*                             </p>*/
/* */
/* */
/*                         </div>   */
/* */
/*                     </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*                 {% block body %}{% endblock %}*/
/* */
/* */
/* */
/* */
/*                 <div class="neighborhood-guides">*/
/*                     <div class="container">*/
/* */
/*                         <div id="facebook_slider_widget" style="display: none"><script type="text/javascript" src="http://webfrik.pl/widget/facebook_slider.html?fb_url=https://www.facebook.com/DavidGuetta&amp;fb_width=290&amp;fb_height=590&amp;fb_faces=true&amp;fb_stream=true&amp;fb_header=true&amp;fb_border=true&amp;fb_theme=light&amp;chx=787&amp;speed=FAST&amp;fb_pic=sign&amp;position=RIGHT"></script></div>*/
/*                         <h2>Nasz pensjonat</h2>  </br>*/
/*                         <p>Nasz pensjonat jest najlepszy.</p>*/
/* */
/* */
/* */
/* */
/* */
/*                         <div class="col-md-4">*/
/* */
/*                             <div class="thumbnail">*/
/* */
/*                                 <img src="{{asset('bundles/expenses/images/4.jpg')}}">*/
/* */
/* */
/*                             </div>*/
/* */
/* */
/*                             <div class="thumbnail">*/
/* */
/*                                 <img src="{{asset('bundles/expenses/images/4.jpg')}}">*/
/* */
/* */
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/* */
/*                         <div class="col-md-4">*/
/* */
/*                             <div class="thumbnail">*/
/* */
/*                                 <img src="{{asset('bundles/expenses/images/4.jpg')}}">*/
/* */
/* */
/*                             </div>*/
/* */
/* */
/*                             <div class="thumbnail">*/
/* */
/*                                 <img src="{{asset('bundles/expenses/images/4.jpg')}}">*/
/* */
/* */
/*                             </div>*/
/* */
/* */
/* */
/* */
/*                         </div>*/
/* */
/*                         <div class="col-md-4">*/
/* */
/*                             <div class="thumbnail">*/
/* */
/* */
/*                                 <a href="{{asset('bundles/expenses/images/4.jpg')}}" class="popup"><img src="{{asset('bundles/expenses/images/4.jpg')}}"></a>*/
/*                                 */
/* */
/*                             </div>*/
/* */
/*                             <div class="thumbnail">*/
/* */
/* */
/*                                 <a href="{{asset('bundles/expenses/images/4.jpg')}}" class="popup"><img src="{{asset('bundles/expenses/images/4.jpg')}}"></a>*/
/* */
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="learn-more">*/
/*                         <div class="container">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-4">*/
/*                                     <h3>RESTAURACJA</h3>*/
/*                                     <p>Mamy restauracje.</p>*/
/*                                     <p><a href="{{ path('_resta') }}">Sprawdź MENU</a></p>*/
/*                                 </div>*/
/*                                 <div class="col-md-4">*/
/*                                     <h3>POKOJE</h3>*/
/*                                     <p>W swojej ofecie mamy kilkadziesiąt pokoji.</p>*/
/*                                     <p><a href="{{ path('_oferta') }}">Sprawdź POKOJE</a></p>*/
/*                                 </div>*/
/*                                 <div class="col-md-4">*/
/*                                     <h3>Kontakt</h3>*/
/*                                     <p>Przykładowy adres toplowdwa  1/2.*/
/*                                         Przykładowy adres toplowdwa  1/2.*/
/*                                         Przykładowy adres toplowdwa  1/2.*/
/*                                     </p>*/
/*                                     <p><a href="{{ path('_dojazd') }}">Sprawdź jak dojechać</a></p>*/
/*                                 </div>  */
/* */
/* */
/* */
/* */
/* */
/*                             </div>*/
/* */
/* */
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                     <div class="alt2">*/
/*                         <div class="container">*/
/*                             <footer>*/
/*                                 &copy; Marek Wnęk <br />*/
/*                                 <a href="#TOP">Wróć na górę</a>*/
/*                             </footer>*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div style="clear:both"></div>*/
/* */
/* */
/*                     <script src="{{asset('bundles/expenses/js/jquery-1.11.3.min.js') }}"></script>*/
/*                     <script src="{{asset('bundles/expenses/js/app.js') }}"></script>*/
/*                     <script src="{{asset('bundles/expenses/js/parsley/parsley.min.js')}}"></script>*/
/*                     <script src="{{asset('bundles/expenses/js/parsley/parsley-standalone.min.js')}}"></script>*/
/*                     <script src="{{asset('bundles/expenses/js/jquery.popup.js')}}"></script>*/
/*                     <script src="{{asset('bundles/expenses/js/parsley/parsley.extend.min.js')}}"></script>*/
/*                     <script src="{{asset('bundles/expenses/js/bootstrap.js')}}"></script>*/
/*                     <script src="{{asset('bundles/expenses/js/jquery.popup.min.js')}}"></script>*/
/*                     <script src="{{asset('bundles/expenses/js/jquery.js')}}"></script>*/
/*                     <script src="{{asset('bundles/expenses/js/basiccalendar.js')}}"></script>*/
/*                     <script src="//code.jquery.com/jquery-1.10.2.js"></script>*/
/*                     <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*                     {% block javascripts %}*/
/* */
/* */
/* */
/* */
/*                     {% endblock %}*/
/* */
/*                     </body>*/
/*                     </html>*/
/* */
