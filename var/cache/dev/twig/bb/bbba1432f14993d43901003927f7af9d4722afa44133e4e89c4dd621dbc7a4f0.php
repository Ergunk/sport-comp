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
        $__internal_13a13467bc45addc3c5d73a19badff1b4a7a850a0e966fea70358adabeb51a28 = $this->env->getExtension("native_profiler");
        $__internal_13a13467bc45addc3c5d73a19badff1b4a7a850a0e966fea70358adabeb51a28->enter($__internal_13a13467bc45addc3c5d73a19badff1b4a7a850a0e966fea70358adabeb51a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a13467bc45addc3c5d73a19badff1b4a7a850a0e966fea70358adabeb51a28->leave($__internal_13a13467bc45addc3c5d73a19badff1b4a7a850a0e966fea70358adabeb51a28_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_502cb1e398ee95a775ae847c3db4fa76a91a7d5ee8d1268dbf7487a80070037a = $this->env->getExtension("native_profiler");
        $__internal_502cb1e398ee95a775ae847c3db4fa76a91a7d5ee8d1268dbf7487a80070037a->enter($__internal_502cb1e398ee95a775ae847c3db4fa76a91a7d5ee8d1268dbf7487a80070037a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_502cb1e398ee95a775ae847c3db4fa76a91a7d5ee8d1268dbf7487a80070037a->leave($__internal_502cb1e398ee95a775ae847c3db4fa76a91a7d5ee8d1268dbf7487a80070037a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8dcaeb4e15655f63db388c8c6e114126953ff215bf52d17b75d052ba5bf6654b = $this->env->getExtension("native_profiler");
        $__internal_8dcaeb4e15655f63db388c8c6e114126953ff215bf52d17b75d052ba5bf6654b->enter($__internal_8dcaeb4e15655f63db388c8c6e114126953ff215bf52d17b75d052ba5bf6654b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8dcaeb4e15655f63db388c8c6e114126953ff215bf52d17b75d052ba5bf6654b->leave($__internal_8dcaeb4e15655f63db388c8c6e114126953ff215bf52d17b75d052ba5bf6654b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc20f7e3c69033283498ed747ffdbc8223a40cc564a653f261b33ab8093ffdd2 = $this->env->getExtension("native_profiler");
        $__internal_cc20f7e3c69033283498ed747ffdbc8223a40cc564a653f261b33ab8093ffdd2->enter($__internal_cc20f7e3c69033283498ed747ffdbc8223a40cc564a653f261b33ab8093ffdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cc20f7e3c69033283498ed747ffdbc8223a40cc564a653f261b33ab8093ffdd2->leave($__internal_cc20f7e3c69033283498ed747ffdbc8223a40cc564a653f261b33ab8093ffdd2_prof);

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
