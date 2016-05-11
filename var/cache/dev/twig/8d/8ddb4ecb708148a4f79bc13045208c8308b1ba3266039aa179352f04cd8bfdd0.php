<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_a3db669f0bf4fd2b967089740108a9777bb4fd03547c16ba8f5375391b837b2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_2b09a5c4f054e57f32d443a83560f388abe045c31876e4caff610a153113e19d = $this->env->getExtension("native_profiler");
        $__internal_2b09a5c4f054e57f32d443a83560f388abe045c31876e4caff610a153113e19d->enter($__internal_2b09a5c4f054e57f32d443a83560f388abe045c31876e4caff610a153113e19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b09a5c4f054e57f32d443a83560f388abe045c31876e4caff610a153113e19d->leave($__internal_2b09a5c4f054e57f32d443a83560f388abe045c31876e4caff610a153113e19d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5801dee83db8d570fa3f77c9d940ba1b0ff8470a4bfd036f778bf91fd3a00b75 = $this->env->getExtension("native_profiler");
        $__internal_5801dee83db8d570fa3f77c9d940ba1b0ff8470a4bfd036f778bf91fd3a00b75->enter($__internal_5801dee83db8d570fa3f77c9d940ba1b0ff8470a4bfd036f778bf91fd3a00b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_5801dee83db8d570fa3f77c9d940ba1b0ff8470a4bfd036f778bf91fd3a00b75->leave($__internal_5801dee83db8d570fa3f77c9d940ba1b0ff8470a4bfd036f778bf91fd3a00b75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
