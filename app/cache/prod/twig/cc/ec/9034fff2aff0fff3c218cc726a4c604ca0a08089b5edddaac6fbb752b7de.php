<?php

/* ::base.html.twig */
class __TwigTemplate_ccec9034fff2aff0fff3c218cc726a4c604ca0a08089b5edddaac6fbb752b7de extends Twig_Template
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
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300' rel='stylesheet' type='text/css'>
        <link href=\"http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css\" rel=\"stylesheet\">
        <link href=\"http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Almendra&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Amarante&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
         
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
      


     

        

      


        ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
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
        // line 45
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\">Strona Główna</a></li>

                <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("_resta");
        echo "\">Restauracja</a></li>

                <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("_oferta");
        echo "\">Pokoje</a></li>

                <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("_dojazd");
        echo "\">Dojazd</a></li>
                
                <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("_regul");
        echo "\">Regulamin</a></li>
                
                <li><a href=\"";
        // line 55
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
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "                
                
                
                
           <div class=\"neighborhood-guides\">
    <div class=\"container\">
     >
        <div id=\"facebook_slider_widget\" style=\"display: none\"><script type=\"text/javascript\" src=\"http://webfrik.pl/widget/facebook_slider.html?fb_url=https://www.facebook.com/DavidGuetta&amp;fb_width=290&amp;fb_height=590&amp;fb_faces=true&amp;fb_stream=true&amp;fb_header=true&amp;fb_border=true&amp;fb_theme=light&amp;chx=787&amp;speed=FAST&amp;fb_pic=sign&amp;position=RIGHT\"></script></div>
        <h2>Nasz pensjonat</h2>  </br>
    <p>Nasz pensjonat jest najlepszy.</p>
    
       
  
    
    
    <div class=\"col-md-4\">
    
    <div class=\"thumbnail\">
    
    <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\">
    
    
    </div>
    
    
    <div class=\"thumbnail\">
    
    <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\">
    
    
    </div>
    
    
    </div>
   
    <div class=\"col-md-4\">
    
    <div class=\"thumbnail\">
    
    <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\">
    
    
    </div>
    
    
    <div class=\"thumbnail\">
    
    <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\">
    
    
    </div>
    
    
    
    
    </div>
    
    <div class=\"col-md-4\">
   
     <div class=\"thumbnail\">
    
    
    <a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\" class=\"popup\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/4.jpg"), "html", null, true);
        echo "\"></a>
    
    
    </div>
    
    <div class=\"thumbnail\">
    
    
    <a href=\"";
        // line 170
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
        // line 185
        echo $this->env->getExtension('routing')->getPath("_resta");
        echo "\">Sprawdź MENU</a></p>
                            </div>
                            <div class=\"col-md-4\">
                                <h3>POKOJE</h3>
                                <p>W swojej ofecie mamy kilkadziesiąt pokoji.</p>
                                <p><a href=\"";
        // line 190
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
        // line 198
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
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/app.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/parsley/parsley-standalone.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/jquery.popup.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/parsley/parsley.extend.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                  <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/jquery.popup.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/js/basiccalendar.js"), "html", null, true);
        echo "\"></script>
                <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
                <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
                
                
                
              


                ";
        // line 250
        $this->displayBlock('javascripts', $context, $blocks);
        // line 255
        echo "                
                </body>
                </html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
    }

    // line 250
    public function block_javascripts($context, array $blocks = array())
    {
        // line 251
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
        return array (  394 => 251,  391 => 250,  386 => 99,  380 => 29,  374 => 6,  367 => 255,  365 => 250,  353 => 241,  349 => 240,  345 => 239,  341 => 238,  337 => 237,  333 => 236,  329 => 235,  325 => 234,  321 => 233,  317 => 232,  280 => 198,  269 => 190,  261 => 185,  241 => 170,  228 => 162,  210 => 147,  199 => 139,  184 => 127,  173 => 119,  152 => 100,  150 => 99,  103 => 55,  98 => 53,  93 => 51,  88 => 49,  83 => 47,  78 => 45,  61 => 30,  59 => 29,  42 => 15,  30 => 6,  23 => 1,);
    }
}
