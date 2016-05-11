<?php

/* LoginBundle:Security:login.html.twig */
class __TwigTemplate_a81cc4e12d6e3367454459924aaf22ebfb3e6fc6b9ee610d0f134cd00509fdf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "LoginBundle:Security:login.html.twig", 3);
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
        $__internal_f4518499fe3b4f2ed142b07fdc3f3cefaf9fd2f293d1a55c398b2a650235e481 = $this->env->getExtension("native_profiler");
        $__internal_f4518499fe3b4f2ed142b07fdc3f3cefaf9fd2f293d1a55c398b2a650235e481->enter($__internal_f4518499fe3b4f2ed142b07fdc3f3cefaf9fd2f293d1a55c398b2a650235e481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4518499fe3b4f2ed142b07fdc3f3cefaf9fd2f293d1a55c398b2a650235e481->leave($__internal_f4518499fe3b4f2ed142b07fdc3f3cefaf9fd2f293d1a55c398b2a650235e481_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_98aed5480690798d9af94c7661d49f737d381d0475b3f814537ee1189b772420 = $this->env->getExtension("native_profiler");
        $__internal_98aed5480690798d9af94c7661d49f737d381d0475b3f814537ee1189b772420->enter($__internal_98aed5480690798d9af94c7661d49f737d381d0475b3f814537ee1189b772420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  ";
        // line 8
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 11
        echo "
  ";
        // line 13
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

";
        
        $__internal_98aed5480690798d9af94c7661d49f737d381d0475b3f814537ee1189b772420->leave($__internal_98aed5480690798d9af94c7661d49f737d381d0475b3f814537ee1189b772420_prof);

    }

    public function getTemplateName()
    {
        return "LoginBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  55 => 13,  52 => 11,  46 => 9,  43 => 8,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/LoginBundle/Resources/views/Security/login.html.twig #}*/
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*   {% if error %}*/
/*     <div class="alert alert-danger">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/*   {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*   <form action="{{ path('fos_user_security_check') }}" method="post">*/
/*     <label for="username">Login :</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <br />*/
/*     <input type="submit" value="Connexion" />*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
