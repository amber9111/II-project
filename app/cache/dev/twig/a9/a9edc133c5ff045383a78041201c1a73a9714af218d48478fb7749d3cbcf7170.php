<?php

/* ExpensesBundle:Default:pokoje.html.twig */
class __TwigTemplate_0cac3cb45fee33766d5910a1446581062552f7ac4810c8bce7704df33e71bebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ExpensesBundle:Default:pokoje.html.twig", 1);
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

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "
    <script>
        var options = {};
        \$('a.popup').popup(options);
    </script>
    
        <script>
        \$(function () {
            \$(\"#tabs\").tabs();
        });
    </script>

";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "


    <div class=\"content\">
        <div class=\"container\">
            <h2>Pokoje</h1> 
             <div class=\"col-md-2\">
          <div class=\"thumbnail\">



             <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/expenses/images/image.jpg"), "html", null, true);
        echo "\">                    

          </div>
      </div>
            
            
            <p>Obiekt dysponuje 50 miejscami w pokojach dwu, trzy i czteroosobowych oraz w apartamentach.
                Wszystkie pokoje posiadają łazienki, wyposażone sa w telewizor z TV SAT, większość z nich posiada balkony na stronę południową z widokiem na Tatry.
               biekt dysponuje 50 miejscami w pokojach dwu, trzy i czteroosobowych oraz w apartamentach.
                Wszystkie pokoje posiadają łazienki, wyposażone sa w telewizor z TV SAT, większość z nich posiada balkony na stronę połudn
                </br>
                <br><br> 1 osobowy pokoj - 40 zł. </br>
                2 osobowy pokoj - 100 zł </br>
                3 osobowy pokoj - 150 zł </br>
            </p>

            <div id=\"tabs\">
                
                <ul>
                <li><a href=\"#tabs-1\">Pokoje jedno - osobowe</a></li>
                <li><a href=\"#tabs-2\">Pokoje dwu-osobowe</a></li>
                <li><a href=\"#tabs-3\">Pokoje trzy-osobowe</a></li>
                </ul> 
             

            <div id=\"tabs-1\">
                
                
                <div class=\"col-md-2\">
                     <div class=\"thumbnail\">



                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"> <img src=\"http://goo.gl/0Kd7UO\"></a>                    

                </div>


                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>                    


                </div>

                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>    

                </div>
                </div>
                
                                <div class=\"col-md-2\">
                     <div class=\"thumbnail\">



                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>                    

                </div>


                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>                    


                </div>

                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>    

                </div>
                </div>  
                
                                <div class=\"col-md-2\">
                     <div class=\"thumbnail\">



                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>                    

                </div>


                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>                    


                </div>

                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>    

                </div>
                </div>  
                
                                <div class=\"col-md-2\">
                     <div class=\"thumbnail\">



                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>                    

                </div>


                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>                    


                </div>

                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>    

                </div>
                </div>  
                
                                <div class=\"col-md-2\">
                     <div class=\"thumbnail\">



                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>                    

                </div>


                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>                    


                </div>

                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>    

                </div>
                </div>  
                                <div class=\"col-md-2\">
                     <div class=\"thumbnail\">



                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>                    

                </div>


                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>                    


                </div>

                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>    

                </div>
                </div>  
                
                <p>DAWGEWGERTHRTGWADSZFRDHTRHTRBDXVSDHTRHDFDgdf</p>
                
            </div>
            
            
            <div id=\"tabs-2\">
                
                
                  <div class=\"col-md-2\">
                     <div class=\"thumbnail\">



                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>                    

                </div>


                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>                    


                </div>

                <div class=\"thumbnail\">

                    <a href=\"http://placehold.it/350x175.png\" class=\"popup\"><img src=\"http://goo.gl/0Kd7UO\"></a>    

                </div>
                </div>
                lel
              
                
            </div>
            <div id=\"tabs-3\">
                
                
            </div>
</div>
           




            </div>

            <div style=\"clear:both\"></div>



        </div>
    



";
    }

    public function getTemplateName()
    {
        return "ExpensesBundle:Default:pokoje.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 30,  51 => 19,  48 => 18,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     <script>*/
/*         var options = {};*/
/*         $('a.popup').popup(options);*/
/*     </script>*/
/*     */
/*         <script>*/
/*         $(function () {*/
/*             $("#tabs").tabs();*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/*     <div class="content">*/
/*         <div class="container">*/
/*             <h2>Pokoje</h1> */
/*              <div class="col-md-2">*/
/*           <div class="thumbnail">*/
/* */
/* */
/* */
/*              <img src="{{asset('bundles/expenses/images/image.jpg') }}">                    */
/* */
/*           </div>*/
/*       </div>*/
/*             */
/*             */
/*             <p>Obiekt dysponuje 50 miejscami w pokojach dwu, trzy i czteroosobowych oraz w apartamentach.*/
/*                 Wszystkie pokoje posiadają łazienki, wyposażone sa w telewizor z TV SAT, większość z nich posiada balkony na stronę południową z widokiem na Tatry.*/
/*                biekt dysponuje 50 miejscami w pokojach dwu, trzy i czteroosobowych oraz w apartamentach.*/
/*                 Wszystkie pokoje posiadają łazienki, wyposażone sa w telewizor z TV SAT, większość z nich posiada balkony na stronę połudn*/
/*                 </br>*/
/*                 <br><br> 1 osobowy pokoj - 40 zł. </br>*/
/*                 2 osobowy pokoj - 100 zł </br>*/
/*                 3 osobowy pokoj - 150 zł </br>*/
/*             </p>*/
/* */
/*             <div id="tabs">*/
/*                 */
/*                 <ul>*/
/*                 <li><a href="#tabs-1">Pokoje jedno - osobowe</a></li>*/
/*                 <li><a href="#tabs-2">Pokoje dwu-osobowe</a></li>*/
/*                 <li><a href="#tabs-3">Pokoje trzy-osobowe</a></li>*/
/*                 </ul> */
/*              */
/* */
/*             <div id="tabs-1">*/
/*                 */
/*                 */
/*                 <div class="col-md-2">*/
/*                      <div class="thumbnail">*/
/* */
/* */
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"> <img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/* */
/*                 </div>*/
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>    */
/* */
/*                 </div>*/
/*                 </div>*/
/*                 */
/*                                 <div class="col-md-2">*/
/*                      <div class="thumbnail">*/
/* */
/* */
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/* */
/*                 </div>*/
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>    */
/* */
/*                 </div>*/
/*                 </div>  */
/*                 */
/*                                 <div class="col-md-2">*/
/*                      <div class="thumbnail">*/
/* */
/* */
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/* */
/*                 </div>*/
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>    */
/* */
/*                 </div>*/
/*                 </div>  */
/*                 */
/*                                 <div class="col-md-2">*/
/*                      <div class="thumbnail">*/
/* */
/* */
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/* */
/*                 </div>*/
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>    */
/* */
/*                 </div>*/
/*                 </div>  */
/*                 */
/*                                 <div class="col-md-2">*/
/*                      <div class="thumbnail">*/
/* */
/* */
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/* */
/*                 </div>*/
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>    */
/* */
/*                 </div>*/
/*                 </div>  */
/*                                 <div class="col-md-2">*/
/*                      <div class="thumbnail">*/
/* */
/* */
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/* */
/*                 </div>*/
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>    */
/* */
/*                 </div>*/
/*                 </div>  */
/*                 */
/*                 <p>DAWGEWGERTHRTGWADSZFRDHTRHTRBDXVSDHTRHDFDgdf</p>*/
/*                 */
/*             </div>*/
/*             */
/*             */
/*             <div id="tabs-2">*/
/*                 */
/*                 */
/*                   <div class="col-md-2">*/
/*                      <div class="thumbnail">*/
/* */
/* */
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>                    */
/* */
/* */
/*                 </div>*/
/* */
/*                 <div class="thumbnail">*/
/* */
/*                     <a href="http://placehold.it/350x175.png" class="popup"><img src="http://goo.gl/0Kd7UO"></a>    */
/* */
/*                 </div>*/
/*                 </div>*/
/*                 lel*/
/*               */
/*                 */
/*             </div>*/
/*             <div id="tabs-3">*/
/*                 */
/*                 */
/*             </div>*/
/* </div>*/
/*            */
/* */
/* */
/* */
/* */
/*             </div>*/
/* */
/*             <div style="clear:both"></div>*/
/* */
/* */
/* */
/*         </div>*/
/*     */
/* */
/* */
/* */
/* {% endblock %}*/
