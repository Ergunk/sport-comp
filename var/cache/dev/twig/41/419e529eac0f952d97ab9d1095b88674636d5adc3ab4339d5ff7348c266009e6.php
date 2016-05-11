<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2594f69e2b46d2a0a0e3941c74bc229b79b3e207a42f5df9df7db74eaa4c6f58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_553d463edaddb1ff8987e2bd52e25356c9539cf9f0112b60bd4ad82af5e9feb4 = $this->env->getExtension("native_profiler");
        $__internal_553d463edaddb1ff8987e2bd52e25356c9539cf9f0112b60bd4ad82af5e9feb4->enter($__internal_553d463edaddb1ff8987e2bd52e25356c9539cf9f0112b60bd4ad82af5e9feb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_553d463edaddb1ff8987e2bd52e25356c9539cf9f0112b60bd4ad82af5e9feb4->leave($__internal_553d463edaddb1ff8987e2bd52e25356c9539cf9f0112b60bd4ad82af5e9feb4_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ed628484bd5f63f9341776822987f0c0a00917214e6fb7f436e86eaa66eb104 = $this->env->getExtension("native_profiler");
        $__internal_0ed628484bd5f63f9341776822987f0c0a00917214e6fb7f436e86eaa66eb104->enter($__internal_0ed628484bd5f63f9341776822987f0c0a00917214e6fb7f436e86eaa66eb104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 5)->display($context);
        
        $__internal_0ed628484bd5f63f9341776822987f0c0a00917214e6fb7f436e86eaa66eb104->leave($__internal_0ed628484bd5f63f9341776822987f0c0a00917214e6fb7f436e86eaa66eb104_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
