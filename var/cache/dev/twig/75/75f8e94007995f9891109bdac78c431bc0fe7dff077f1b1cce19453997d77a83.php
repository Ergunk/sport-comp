<?php

/* AccueilBundle:Default:index.html.twig */
class __TwigTemplate_5dfffc2327430625bc5fb8d28f6e7bfe8a2739683cb688e97d78823ffc82af3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AccueilBundle:Default:index.html.twig", 1);
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
        $__internal_76e5699ac0b098efd28b35609c8cb2ac2988824ae6fc5e2873449b30f87a10a8 = $this->env->getExtension("native_profiler");
        $__internal_76e5699ac0b098efd28b35609c8cb2ac2988824ae6fc5e2873449b30f87a10a8->enter($__internal_76e5699ac0b098efd28b35609c8cb2ac2988824ae6fc5e2873449b30f87a10a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76e5699ac0b098efd28b35609c8cb2ac2988824ae6fc5e2873449b30f87a10a8->leave($__internal_76e5699ac0b098efd28b35609c8cb2ac2988824ae6fc5e2873449b30f87a10a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_325f394d267144a71ff5635d449f2c3363054bda6bfec60cc65212f97ff5d7f6 = $this->env->getExtension("native_profiler");
        $__internal_325f394d267144a71ff5635d449f2c3363054bda6bfec60cc65212f97ff5d7f6->enter($__internal_325f394d267144a71ff5635d449f2c3363054bda6bfec60cc65212f97ff5d7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"navbar-wrapper\">

    <nav class=\"navbar navbar-fixed-top\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"javascript:void(0)\">CPLN sports complémentaires</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
          <ul class=\"nav navbar-nav navbar-right\">
            <!-- Affiche le menu du site -->
            <li class=\"active \"> <a href=\"accueil\">Accueil</a></li><li class=\"dropdown\"> <a href=\"sports\">Sports</a><ul class=\"dropdown-menu\"><li><a href=\"sports\">Sports</a></li><li><a href=\"sportsSaisons\">Sports par saisons</a></li><li><a href=\"sportsJours\">Sports par jours</a></li></ul></li><li class=\"\"> <a href=\"camps\">Camps</a></li><li class=\"\"> <a href=\"defis\">Défis</a></li><li class=\"\"> <a href=\"contact\">Contact</a></li><li class=\"\"> <a href=\"login\">Login</a>\t\t\t\t\t  </li></ul>
        </div>
      </div>
    </nav>


  </div>

  <div class=\"container\">
        <h1>Accueil</h1>
  </div>



";
        
        $__internal_325f394d267144a71ff5635d449f2c3363054bda6bfec60cc65212f97ff5d7f6->leave($__internal_325f394d267144a71ff5635d449f2c3363054bda6bfec60cc65212f97ff5d7f6_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="navbar-wrapper">*/
/* */
/*     <nav class="navbar navbar-fixed-top">*/
/*       <div class="container-fluid">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*           <span class="sr-only">Toggle navigation</span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href="javascript:void(0)">CPLN sports complémentaires</a>*/
/*         </div>*/
/* */
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*           <ul class="nav navbar-nav navbar-right">*/
/*             <!-- Affiche le menu du site -->*/
/*             <li class="active "> <a href="accueil">Accueil</a></li><li class="dropdown"> <a href="sports">Sports</a><ul class="dropdown-menu"><li><a href="sports">Sports</a></li><li><a href="sportsSaisons">Sports par saisons</a></li><li><a href="sportsJours">Sports par jours</a></li></ul></li><li class=""> <a href="camps">Camps</a></li><li class=""> <a href="defis">Défis</a></li><li class=""> <a href="contact">Contact</a></li><li class=""> <a href="login">Login</a>					  </li></ul>*/
/*         </div>*/
/*       </div>*/
/*     </nav>*/
/* */
/* */
/*   </div>*/
/* */
/*   <div class="container">*/
/*         <h1>Accueil</h1>*/
/*   </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
