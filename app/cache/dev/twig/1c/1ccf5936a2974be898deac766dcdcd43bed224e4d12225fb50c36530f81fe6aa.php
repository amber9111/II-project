<?php

/* ExpensesBundle:Default:regul.html.twig */
class __TwigTemplate_aefbbddc0d4f6cee763503194f73a2bdfc703a0e441b9c00e27a5b5a57b41e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ExpensesBundle:Default:regul.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo "    <script>
       \$(function() {
    \$( \"#tabs\" ).tabs().addClass( \"ui-tabs-vertical ui-helper-clearfix\" );
    \$( \"#tabs li\" ).removeClass( \"ui-corner-top\" ).addClass( \"ui-corner-left\" );
  });
    </script>
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "<style>
  .ui-tabs-vertical { width: 55em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
  </style>
";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"content\">  
<div class=\"container\">
  
    <h2>Regulamin</h2> </br>
  <div id=\"tabs\">
  <ul>
    <li><a href=\"#tabs-1\">Spis treści</a></li>
    <li><a href=\"#tabs-2\">&1</a></li>
    <li><a href=\"#tabs-3\">&2</a></li>
    <li><a href=\"#tabs-4\">&3</a></li>
    <li><a href=\"#tabs-5\">&4</a></li>
    <li><a href=\"#tabs-6\">&5</a></li>
    <li><a href=\"#tabs-7\">&6</a></li>
    <li><a href=\"#tabs-8\">&7</a></li>
    <li><a href=\"#tabs-9\">&8</a></li>
  </ul>
  <div id=\"tabs-1\">
    <h2>\$1</h2>
    <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
  </div>
  <div id=\"tabs-2\">
    <h2>\$2</h2>
    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
  </div>
  <div id=\"tabs-3\">
    <h2>\$3</h2>
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
      <div id=\"tabs-4\"></div>
          <div id=\"tabs-5\"></div>
              <div id=\"tabs-6\"></div>
                  <div id=\"tabs-7\"></div>
                      <div id=\"tabs-8\"></div>
                          <div id=\"tabs-9\"></div>
</div>
    </div>
     </div>
";
    }

    public function getTemplateName()
    {
        return "ExpensesBundle:Default:regul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 26,  58 => 25,  46 => 14,  43 => 13,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     <script>*/
/*        $(function() {*/
/*     $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );*/
/*     $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );*/
/*   });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*   .ui-tabs-vertical { width: 55em; }*/
/*   .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }*/
/*   .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }*/
/*   .ui-tabs-vertical .ui-tabs-nav li a { display:block; }*/
/*   .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }*/
/*   .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}*/
/*   </style>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <div class="content">  */
/* <div class="container">*/
/*   */
/*     <h2>Regulamin</h2> </br>*/
/*   <div id="tabs">*/
/*   <ul>*/
/*     <li><a href="#tabs-1">Spis treści</a></li>*/
/*     <li><a href="#tabs-2">&1</a></li>*/
/*     <li><a href="#tabs-3">&2</a></li>*/
/*     <li><a href="#tabs-4">&3</a></li>*/
/*     <li><a href="#tabs-5">&4</a></li>*/
/*     <li><a href="#tabs-6">&5</a></li>*/
/*     <li><a href="#tabs-7">&6</a></li>*/
/*     <li><a href="#tabs-8">&7</a></li>*/
/*     <li><a href="#tabs-9">&8</a></li>*/
/*   </ul>*/
/*   <div id="tabs-1">*/
/*     <h2>$1</h2>*/
/*     <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>*/
/*   </div>*/
/*   <div id="tabs-2">*/
/*     <h2>$2</h2>*/
/*     <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>*/
/*   </div>*/
/*   <div id="tabs-3">*/
/*     <h2>$3</h2>*/
/*     <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>*/
/*     <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>*/
/*   </div>*/
/*       <div id="tabs-4"></div>*/
/*           <div id="tabs-5"></div>*/
/*               <div id="tabs-6"></div>*/
/*                   <div id="tabs-7"></div>*/
/*                       <div id="tabs-8"></div>*/
/*                           <div id="tabs-9"></div>*/
/* </div>*/
/*     </div>*/
/*      </div>*/
/* {% endblock %}*/
