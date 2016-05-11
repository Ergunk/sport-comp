<?php

/* ::base.html.twig */
class __TwigTemplate_acf51de61f839a9fb68359cca8af0cd1de5dc082e4535c83a49aac24cd80ab6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab8a8ffcce6c5a11e5a376422b39fb35532ef628d8eba7e900e5f3c1871a2129 = $this->env->getExtension("native_profiler");
        $__internal_ab8a8ffcce6c5a11e5a376422b39fb35532ef628d8eba7e900e5f3c1871a2129->enter($__internal_ab8a8ffcce6c5a11e5a376422b39fb35532ef628d8eba7e900e5f3c1871a2129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ab8a8ffcce6c5a11e5a376422b39fb35532ef628d8eba7e900e5f3c1871a2129->leave($__internal_ab8a8ffcce6c5a11e5a376422b39fb35532ef628d8eba7e900e5f3c1871a2129_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fb349d26551de356ffb250c207b393e3c3d3d9b3da9b012b884a9c411a6531d = $this->env->getExtension("native_profiler");
        $__internal_5fb349d26551de356ffb250c207b393e3c3d3d9b3da9b012b884a9c411a6531d->enter($__internal_5fb349d26551de356ffb250c207b393e3c3d3d9b3da9b012b884a9c411a6531d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5fb349d26551de356ffb250c207b393e3c3d3d9b3da9b012b884a9c411a6531d->leave($__internal_5fb349d26551de356ffb250c207b393e3c3d3d9b3da9b012b884a9c411a6531d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b7966c40d7c838f22436d47c7fd66df6b3de19c477f4f46ff7e02ed41a5739c = $this->env->getExtension("native_profiler");
        $__internal_9b7966c40d7c838f22436d47c7fd66df6b3de19c477f4f46ff7e02ed41a5739c->enter($__internal_9b7966c40d7c838f22436d47c7fd66df6b3de19c477f4f46ff7e02ed41a5739c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9b7966c40d7c838f22436d47c7fd66df6b3de19c477f4f46ff7e02ed41a5739c->leave($__internal_9b7966c40d7c838f22436d47c7fd66df6b3de19c477f4f46ff7e02ed41a5739c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5704354ed86d4ddfc57ca2ce12cca345897ee67ee1f93b610825e00db89295d6 = $this->env->getExtension("native_profiler");
        $__internal_5704354ed86d4ddfc57ca2ce12cca345897ee67ee1f93b610825e00db89295d6->enter($__internal_5704354ed86d4ddfc57ca2ce12cca345897ee67ee1f93b610825e00db89295d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5704354ed86d4ddfc57ca2ce12cca345897ee67ee1f93b610825e00db89295d6->leave($__internal_5704354ed86d4ddfc57ca2ce12cca345897ee67ee1f93b610825e00db89295d6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02163883115b279758c433bf17f78ba538227ac5d7eb6ff41e067fa55bc62b7f = $this->env->getExtension("native_profiler");
        $__internal_02163883115b279758c433bf17f78ba538227ac5d7eb6ff41e067fa55bc62b7f->enter($__internal_02163883115b279758c433bf17f78ba538227ac5d7eb6ff41e067fa55bc62b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_02163883115b279758c433bf17f78ba538227ac5d7eb6ff41e067fa55bc62b7f->leave($__internal_02163883115b279758c433bf17f78ba538227ac5d7eb6ff41e067fa55bc62b7f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
