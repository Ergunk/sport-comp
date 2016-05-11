<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5b86cd544d956a110c8e2d6065238093c3039e82ed4865e61353e82ad67d7e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b65110400e293681a9d09546b2b01640a42c678f245cdd9811987a6c2974c519 = $this->env->getExtension("native_profiler");
        $__internal_b65110400e293681a9d09546b2b01640a42c678f245cdd9811987a6c2974c519->enter($__internal_b65110400e293681a9d09546b2b01640a42c678f245cdd9811987a6c2974c519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b65110400e293681a9d09546b2b01640a42c678f245cdd9811987a6c2974c519->leave($__internal_b65110400e293681a9d09546b2b01640a42c678f245cdd9811987a6c2974c519_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4be40d61bd06903e9f05e09cd5a23dfdfb239e7c9c29791dde98d2455bc885ec = $this->env->getExtension("native_profiler");
        $__internal_4be40d61bd06903e9f05e09cd5a23dfdfb239e7c9c29791dde98d2455bc885ec->enter($__internal_4be40d61bd06903e9f05e09cd5a23dfdfb239e7c9c29791dde98d2455bc885ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4be40d61bd06903e9f05e09cd5a23dfdfb239e7c9c29791dde98d2455bc885ec->leave($__internal_4be40d61bd06903e9f05e09cd5a23dfdfb239e7c9c29791dde98d2455bc885ec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_056f684f5041b172a4058bbb8ac049aa0d9fb2a78d1d3408ff98702bdccc68de = $this->env->getExtension("native_profiler");
        $__internal_056f684f5041b172a4058bbb8ac049aa0d9fb2a78d1d3408ff98702bdccc68de->enter($__internal_056f684f5041b172a4058bbb8ac049aa0d9fb2a78d1d3408ff98702bdccc68de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_056f684f5041b172a4058bbb8ac049aa0d9fb2a78d1d3408ff98702bdccc68de->leave($__internal_056f684f5041b172a4058bbb8ac049aa0d9fb2a78d1d3408ff98702bdccc68de_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3818f86e6d1a499e77c9c6da1c8c7496d5438341ce3bf7396a5d63d50004de16 = $this->env->getExtension("native_profiler");
        $__internal_3818f86e6d1a499e77c9c6da1c8c7496d5438341ce3bf7396a5d63d50004de16->enter($__internal_3818f86e6d1a499e77c9c6da1c8c7496d5438341ce3bf7396a5d63d50004de16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3818f86e6d1a499e77c9c6da1c8c7496d5438341ce3bf7396a5d63d50004de16->leave($__internal_3818f86e6d1a499e77c9c6da1c8c7496d5438341ce3bf7396a5d63d50004de16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
