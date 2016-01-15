<?php

/* ExpensesBundle:Default:signup.html.twig */
class __TwigTemplate_c8562577feac350ea1992c9ac8df6dca19088167e72020f5a8880a79b207cb13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ExpensesBundle:Default:signup.html.twig", 1);
        $this->blocks = array(
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container\">
    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_rezerwacja");
        echo "\" data-validate=\"parsley\">
         <h2>Formularz rezerwacji</h2>
         <label>E-mail</label>
        <input type=\"text\" name=\"email\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
        <label>Imię</label>
        <input type=\"text\" name=\"firstname\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <label>Nazwisko</label>
        <input type=\"text\" name=\"username\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <label>Adres</label>
        <input type=\"text\" name=\"adress\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
         <label>Telefon</label>
        <input type=\"text\" name=\"telefon\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
         <label>Pokój</label>
        <input type=\"text\" name=\"pokoj\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">        
        <div>
            <button class=\"btn btn-primary\" type=\"submit\" >Wyślij zapytanie</button>
        </div>

    </form>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "ExpensesBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* */
/* {%block body %}*/
/* */
/* <div class="container">*/
/*     <form id="form" class="well" method="POST" action="{{path('_rezerwacja')}}" data-validate="parsley">*/
/*          <h2>Formularz rezerwacji</h2>*/
/*          <label>E-mail</label>*/
/*         <input type="text" name="email" class="input-xlarge" data-trigger="change" data-required="true" data-type="email">*/
/*         <label>Imię</label>*/
/*         <input type="text" name="firstname" class="input-xlarge" data-trigger="change" data-required="true">*/
/*         <label>Nazwisko</label>*/
/*         <input type="text" name="username" class="input-xlarge" data-trigger="change" data-required="true">*/
/*         <label>Adres</label>*/
/*         <input type="text" name="adress" class="input-xlarge" data-trigger="change" data-required="true">*/
/*          <label>Telefon</label>*/
/*         <input type="text" name="telefon" class="input-xlarge" data-trigger="change" data-required="true">*/
/*          <label>Pokój</label>*/
/*         <input type="text" name="pokoj" class="input-xlarge" data-trigger="change" data-required="true">        */
/*         <div>*/
/*             <button class="btn btn-primary" type="submit" >Wyślij zapytanie</button>*/
/*         </div>*/
/* */
/*     </form>*/
/* </div>*/
/*  {%endblock %}*/
/*  */
/*  */
/* */
