<?php

/* ExpensesBundle:Default:dojazd.html.twig */
class __TwigTemplate_730b67c7d9afc34c9562adc608555fd8dbb2ee3ccdfd82c21d8117ce6d851e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ExpensesBundle:Default:dojazd.html.twig", 1);
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

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        // line 5
        echo "
<script src=\"http://maps.googleapis.com/maps/api/js\"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);
  var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>    

";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "
 <div class=\"content\">
     <h2>Dojazd</h2> </br>
    <div id=\"googleMap\" style=\"width:700px;height:300px;\"></div>
    
    <h2>33-300 WARSZAWA </h2></br>
    <h2>ULICA POWSTAŃCÓW ŚLĄSKICH </h2> </br>
    <h2> EMAIL: ZBIGNIEW@GMAIL.COM </h2> </br>
    


    

</div>
 

    
";
    }

    public function getTemplateName()
    {
        return "ExpensesBundle:Default:dojazd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 29,  55 => 28,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block javascripts %}*/
/* */
/* <script src="http://maps.googleapis.com/maps/api/js"></script>*/
/* <script>*/
/* function initialize() {*/
/*   var mapProp = {*/
/*     center:new google.maps.LatLng(51.508742,-0.120850),*/
/*     zoom:5,*/
/*     mapTypeId:google.maps.MapTypeId.ROADMAP*/
/*   };*/
/*   var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);*/
/*   var marker=new google.maps.Marker({*/
/*   position:myCenter,*/
/*   });*/
/* */
/* marker.setMap(map);*/
/* }*/
/* google.maps.event.addDomListener(window, 'load', initialize);*/
/* </script>    */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/*  <div class="content">*/
/*      <h2>Dojazd</h2> </br>*/
/*     <div id="googleMap" style="width:700px;height:300px;"></div>*/
/*     */
/*     <h2>33-300 WARSZAWA </h2></br>*/
/*     <h2>ULICA POWSTAŃCÓW ŚLĄSKICH </h2> </br>*/
/*     <h2> EMAIL: ZBIGNIEW@GMAIL.COM </h2> </br>*/
/*     */
/* */
/* */
/*     */
/* */
/* </div>*/
/*  */
/* */
/*     */
/* {% endblock %}*/
