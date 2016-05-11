<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_16692bc0053e0d5ea8017765a6efce124ab8e433802a0adb80725b827c2a70f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_146fcfa1ca3b2769c1b3ae4f13fda582d462d0a6c901466f7886f96cdcc62481 = $this->env->getExtension("native_profiler");
        $__internal_146fcfa1ca3b2769c1b3ae4f13fda582d462d0a6c901466f7886f96cdcc62481->enter($__internal_146fcfa1ca3b2769c1b3ae4f13fda582d462d0a6c901466f7886f96cdcc62481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_146fcfa1ca3b2769c1b3ae4f13fda582d462d0a6c901466f7886f96cdcc62481->leave($__internal_146fcfa1ca3b2769c1b3ae4f13fda582d462d0a6c901466f7886f96cdcc62481_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_269d4cefd73a32fa0250e96d4e1acaeabfc8368ead8eae58fb1d3fa2b2ae08b1 = $this->env->getExtension("native_profiler");
        $__internal_269d4cefd73a32fa0250e96d4e1acaeabfc8368ead8eae58fb1d3fa2b2ae08b1->enter($__internal_269d4cefd73a32fa0250e96d4e1acaeabfc8368ead8eae58fb1d3fa2b2ae08b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
  ";
        // line 9
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "      <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
        ";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
  ";
        // line 18
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_269d4cefd73a32fa0250e96d4e1acaeabfc8368ead8eae58fb1d3fa2b2ae08b1->leave($__internal_269d4cefd73a32fa0250e96d4e1acaeabfc8368ead8eae58fb1d3fa2b2ae08b1_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f366e318b4af121fa317a8d442b843a9abeff4fe731295d1678e97f91eaae05 = $this->env->getExtension("native_profiler");
        $__internal_7f366e318b4af121fa317a8d442b843a9abeff4fe731295d1678e97f91eaae05->enter($__internal_7f366e318b4af121fa317a8d442b843a9abeff4fe731295d1678e97f91eaae05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "  ";
        
        $__internal_7f366e318b4af121fa317a8d442b843a9abeff4fe731295d1678e97f91eaae05->leave($__internal_7f366e318b4af121fa317a8d442b843a9abeff4fe731295d1678e97f91eaae05_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  88 => 18,  80 => 20,  77 => 18,  74 => 16,  68 => 15,  59 => 12,  54 => 11,  49 => 10,  44 => 9,  41 => 7,  35 => 6,  11 => 3,);
    }
}
/* */
/* {# On étend notre layout #}*/
/* {% extends "::base.html.twig" %}*/
/* */
/* {# Dans notre layout, il faut définir le block body #}*/
/* {% block body %}*/
/* */
/*   {# On affiche les messages flash que définissent les contrôleurs du bundle #}*/
/*   {% for key, messages in app.session.flashbag.all() %}*/
/*     {% for message in messages %}*/
/*       <div class="alert alert-{{ key }}">*/
/*         {{ message|trans({}, 'FOSUserBundle') }}*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% endfor %}*/
/* */
/*   {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
