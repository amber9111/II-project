<?php

/* ExpensesBundle:Default:resta.html.twig */
class __TwigTemplate_1b5bf17a8b6e52b42226ba2578f72ae7efb38ed0fe0520d0656526345645ea55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ExpensesBundle:Default:resta.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        // line 3
        echo "<script>
    
 var main = function() {
  \$('.article').click(function() {
    \$('.article').removeClass('current');
    \$('.description').hide();

    \$(this).addClass('current');
    \$(this).children('.description').show();
  });
}

\$(document).ready(main);   
    
    
</script>
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "
 
 <div class=\"content\">
 
     <div class=\"container\">
         
          <div class=\"logo1\">
                        
                        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/logo.png"), "html", null, true);
        echo "\">
                        
                        </div>
         
       <div class=\"col-md-2\">
          <div class=\"thumbnail\">



                    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/image.jpg"), "html", null, true);
        echo "\" class=\"popup\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/image.jpg"), "html", null, true);
        echo "\"></a>                    

          </div>
      </div>
      <p>Po dniu pełnym wrażeń, gości naszego pensjonatu jak i wszystkich przejeżdżających przez Łapsze zapraszamy do naszej restauracji. W komfortowym, klimatyzowanym wnętrzu mogą zasmakować Państwo dań kuchni regionalnej oraz europejskiej. 
Oferujemy również dobrze wyposażony drink-bar. Po dniu pełnym wrażeń, gości naszego pensjonatu jak i wszystkich przejeżdżających przez Łapsze zapraszamy do naszej restauracji. W komfortowym, klimatyzowanym wnętrzu mogą zasmakować Państwo dań kuchni regionalnej oraz europejskiej. 
Oferujemy również dobrze wyposażony drink-bar. Po dniu pełnym wrażeń, gości naszego pensjonatu jak i wszystkich przejeżdżających przez Łapsze zapraszamy do naszej restauracji. W komfortowym, klimatyzowanym wnętrzu mogą zasmakować Państwo dań kuchni regionalnej oraz europejskiej. 
Oferujemy również dobrze wyposażony drink-bar.  </p>



      <div class=\"article current\">
        <div class=\"item row\">
         
          <div class=\"col-xs-6\">
              <p class=\"title\">Dania główne</p>
          </div>
        
        </div>
        <div class=\"description row\">
          
          <div class=\"col-xs-10\">
           
              <p>Jajko sadzone na szpinaku \t8 zł </br>
                  Tosty z serem mozarella i pomidorami\t10 zł  </br>
                  Ser Camembert panierowany z żurawiną\t10 zł   </br>
                  Bigos (200 g)\t8 zł </p>
          </div>
          
        </div>
      </div>

      <div class=\"article\">
        <div class=\"item row\">
         
          <div class=\"col-xs-6\">
            <p class=\"title\">Zupy</p>
          </div>
         
        </div>
        <div class=\"description row\">
         
          <div class=\"col-xs-10\">
            
            <p>Gówno \t8 zł </br>
                  Tosty z serem mozarella i pomidorami\t10 zł  </br>
                  Ser Camembert panierowany z żurawiną\t10 zł   </br>
                  Bigos (200 g)\t8 zł</p>
          </div>
          <div class=\"col-xs-3\">&nbsp;</div>
        </div>
      </div>

      <div class=\"article\">
        <div class=\"item row\">
            
          <div class=\"col-xs-6\">
            <p class=\"title\">Przystawki</p>
          </div>
        
         
        </div>
        <div class=\"description row\">
          
          <div class=\"col-xs-10\">
            
            <p>Jajko sadzone na szpinaku \t8 zł </br>
                  Tosty z serem mozarella i pomidorami\t10 zł  </br>
                  Ser Camembert panierowany z żurawiną\t10 zł   </br>
                  Bigos (200 g)\t8 zł</p>
          </div>
          <div class=\"col-xs-3\">&nbsp;</div>
        </div>
      </div>

      <div class=\"article\">
        <div class=\"item row\">
          <div class=\"col-xs-6\">
            <p class=\"title\">Desery</p>
          </div>
          
          
        </div>
        <div class=\"description row\">
          
          <div class=\"col-xs-10\">
            
            <p>Jajko sadzone na szpinaku \t8 zł </br>
                  Tosty z serem mozarella i pomidorami\t10 zł  </br>
                  Ser Camembert panierowany z żurawiną\t10 zł   </br>
                  Bigos (200 g)\t8 zł</p>
          </div>
          <div class=\"col-xs-3\">&nbsp;</div>
        </div>
      </div>
         </div>

 </div>
    
    
";
    }

    public function getTemplateName()
    {
        return "ExpensesBundle:Default:resta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 39,  65 => 30,  55 => 22,  52 => 21,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block javascripts %}*/
/* <script>*/
/*     */
/*  var main = function() {*/
/*   $('.article').click(function() {*/
/*     $('.article').removeClass('current');*/
/*     $('.description').hide();*/
/* */
/*     $(this).addClass('current');*/
/*     $(this).children('.description').show();*/
/*   });*/
/* }*/
/* */
/* $(document).ready(main);   */
/*     */
/*     */
/* </script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*  */
/*  <div class="content">*/
/*  */
/*      <div class="container">*/
/*          */
/*           <div class="logo1">*/
/*                         */
/*                         <img src="{{asset('bundles/expenses/images/logo.png')}}">*/
/*                         */
/*                         </div>*/
/*          */
/*        <div class="col-md-2">*/
/*           <div class="thumbnail">*/
/* */
/* */
/* */
/*                     <a href="{{asset('bundles/expenses/images/image.jpg') }}" class="popup"><img src="{{asset('bundles/expenses/images/image.jpg') }}"></a>                    */
/* */
/*           </div>*/
/*       </div>*/
/*       <p>Po dniu pełnym wrażeń, gości naszego pensjonatu jak i wszystkich przejeżdżających przez Łapsze zapraszamy do naszej restauracji. W komfortowym, klimatyzowanym wnętrzu mogą zasmakować Państwo dań kuchni regionalnej oraz europejskiej. */
/* Oferujemy również dobrze wyposażony drink-bar. Po dniu pełnym wrażeń, gości naszego pensjonatu jak i wszystkich przejeżdżających przez Łapsze zapraszamy do naszej restauracji. W komfortowym, klimatyzowanym wnętrzu mogą zasmakować Państwo dań kuchni regionalnej oraz europejskiej. */
/* Oferujemy również dobrze wyposażony drink-bar. Po dniu pełnym wrażeń, gości naszego pensjonatu jak i wszystkich przejeżdżających przez Łapsze zapraszamy do naszej restauracji. W komfortowym, klimatyzowanym wnętrzu mogą zasmakować Państwo dań kuchni regionalnej oraz europejskiej. */
/* Oferujemy również dobrze wyposażony drink-bar.  </p>*/
/* */
/* */
/* */
/*       <div class="article current">*/
/*         <div class="item row">*/
/*          */
/*           <div class="col-xs-6">*/
/*               <p class="title">Dania główne</p>*/
/*           </div>*/
/*         */
/*         </div>*/
/*         <div class="description row">*/
/*           */
/*           <div class="col-xs-10">*/
/*            */
/*               <p>Jajko sadzone na szpinaku 	8 zł </br>*/
/*                   Tosty z serem mozarella i pomidorami	10 zł  </br>*/
/*                   Ser Camembert panierowany z żurawiną	10 zł   </br>*/
/*                   Bigos (200 g)	8 zł </p>*/
/*           </div>*/
/*           */
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="article">*/
/*         <div class="item row">*/
/*          */
/*           <div class="col-xs-6">*/
/*             <p class="title">Zupy</p>*/
/*           </div>*/
/*          */
/*         </div>*/
/*         <div class="description row">*/
/*          */
/*           <div class="col-xs-10">*/
/*             */
/*             <p>Gówno 	8 zł </br>*/
/*                   Tosty z serem mozarella i pomidorami	10 zł  </br>*/
/*                   Ser Camembert panierowany z żurawiną	10 zł   </br>*/
/*                   Bigos (200 g)	8 zł</p>*/
/*           </div>*/
/*           <div class="col-xs-3">&nbsp;</div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="article">*/
/*         <div class="item row">*/
/*             */
/*           <div class="col-xs-6">*/
/*             <p class="title">Przystawki</p>*/
/*           </div>*/
/*         */
/*          */
/*         </div>*/
/*         <div class="description row">*/
/*           */
/*           <div class="col-xs-10">*/
/*             */
/*             <p>Jajko sadzone na szpinaku 	8 zł </br>*/
/*                   Tosty z serem mozarella i pomidorami	10 zł  </br>*/
/*                   Ser Camembert panierowany z żurawiną	10 zł   </br>*/
/*                   Bigos (200 g)	8 zł</p>*/
/*           </div>*/
/*           <div class="col-xs-3">&nbsp;</div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="article">*/
/*         <div class="item row">*/
/*           <div class="col-xs-6">*/
/*             <p class="title">Desery</p>*/
/*           </div>*/
/*           */
/*           */
/*         </div>*/
/*         <div class="description row">*/
/*           */
/*           <div class="col-xs-10">*/
/*             */
/*             <p>Jajko sadzone na szpinaku 	8 zł </br>*/
/*                   Tosty z serem mozarella i pomidorami	10 zł  </br>*/
/*                   Ser Camembert panierowany z żurawiną	10 zł   </br>*/
/*                   Bigos (200 g)	8 zł</p>*/
/*           </div>*/
/*           <div class="col-xs-3">&nbsp;</div>*/
/*         </div>*/
/*       </div>*/
/*          </div>*/
/* */
/*  </div>*/
/*     */
/*     */
/* {% endblock %}*/
