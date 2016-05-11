<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6acf25a893eeb7aeaf1b81bb47837d5b545a1b509a2bcc243f118f3895d8266d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf954b164e85cddbfc96cd5bd4937d09e6d3c17d75e305b96193292a926d9831 = $this->env->getExtension("native_profiler");
        $__internal_cf954b164e85cddbfc96cd5bd4937d09e6d3c17d75e305b96193292a926d9831->enter($__internal_cf954b164e85cddbfc96cd5bd4937d09e6d3c17d75e305b96193292a926d9831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf954b164e85cddbfc96cd5bd4937d09e6d3c17d75e305b96193292a926d9831->leave($__internal_cf954b164e85cddbfc96cd5bd4937d09e6d3c17d75e305b96193292a926d9831_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab5781d940870f5bd1201ed1d041c96e4f38fe074c29913cd22a6a3693f25730 = $this->env->getExtension("native_profiler");
        $__internal_ab5781d940870f5bd1201ed1d041c96e4f38fe074c29913cd22a6a3693f25730->enter($__internal_ab5781d940870f5bd1201ed1d041c96e4f38fe074c29913cd22a6a3693f25730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab5781d940870f5bd1201ed1d041c96e4f38fe074c29913cd22a6a3693f25730->leave($__internal_ab5781d940870f5bd1201ed1d041c96e4f38fe074c29913cd22a6a3693f25730_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_568597114cad7116769b510efe8d8c977a3a2bb329b00a25ab5f604dbdc9aa78 = $this->env->getExtension("native_profiler");
        $__internal_568597114cad7116769b510efe8d8c977a3a2bb329b00a25ab5f604dbdc9aa78->enter($__internal_568597114cad7116769b510efe8d8c977a3a2bb329b00a25ab5f604dbdc9aa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_568597114cad7116769b510efe8d8c977a3a2bb329b00a25ab5f604dbdc9aa78->leave($__internal_568597114cad7116769b510efe8d8c977a3a2bb329b00a25ab5f604dbdc9aa78_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7b9bd89678948e8f29f2a30fec4d632263c5a1505d9dbe25598391898578d97 = $this->env->getExtension("native_profiler");
        $__internal_a7b9bd89678948e8f29f2a30fec4d632263c5a1505d9dbe25598391898578d97->enter($__internal_a7b9bd89678948e8f29f2a30fec4d632263c5a1505d9dbe25598391898578d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a7b9bd89678948e8f29f2a30fec4d632263c5a1505d9dbe25598391898578d97->leave($__internal_a7b9bd89678948e8f29f2a30fec4d632263c5a1505d9dbe25598391898578d97_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
