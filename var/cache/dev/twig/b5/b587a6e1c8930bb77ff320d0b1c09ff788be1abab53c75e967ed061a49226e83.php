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
        $__internal_ea8914c4b9fc1326dd1a777cfcdd7bd4b802ec117e02dd1d73885f93d12bcc39 = $this->env->getExtension("native_profiler");
        $__internal_ea8914c4b9fc1326dd1a777cfcdd7bd4b802ec117e02dd1d73885f93d12bcc39->enter($__internal_ea8914c4b9fc1326dd1a777cfcdd7bd4b802ec117e02dd1d73885f93d12bcc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body style=\"margin-top:50px;\">

    ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
  </body>
</html>
";
        
        $__internal_ea8914c4b9fc1326dd1a777cfcdd7bd4b802ec117e02dd1d73885f93d12bcc39->leave($__internal_ea8914c4b9fc1326dd1a777cfcdd7bd4b802ec117e02dd1d73885f93d12bcc39_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1c4a21df3c4f882173ce3ab3c04cde5dcd065edd73452e76dc4117c682000dc = $this->env->getExtension("native_profiler");
        $__internal_f1c4a21df3c4f882173ce3ab3c04cde5dcd065edd73452e76dc4117c682000dc->enter($__internal_f1c4a21df3c4f882173ce3ab3c04cde5dcd065edd73452e76dc4117c682000dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome tw !";
        
        $__internal_f1c4a21df3c4f882173ce3ab3c04cde5dcd065edd73452e76dc4117c682000dc->leave($__internal_f1c4a21df3c4f882173ce3ab3c04cde5dcd065edd73452e76dc4117c682000dc_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25665294b6fbe9593bbb5372e1b6e801b95d4a7c7981d136763a65823b343e17 = $this->env->getExtension("native_profiler");
        $__internal_25665294b6fbe9593bbb5372e1b6e801b95d4a7c7981d136763a65823b343e17->enter($__internal_25665294b6fbe9593bbb5372e1b6e801b95d4a7c7981d136763a65823b343e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_25665294b6fbe9593bbb5372e1b6e801b95d4a7c7981d136763a65823b343e17->leave($__internal_25665294b6fbe9593bbb5372e1b6e801b95d4a7c7981d136763a65823b343e17_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bec5859d40f14425fed131255050e210bcab6cb54341a6fbac040b8d65ece30 = $this->env->getExtension("native_profiler");
        $__internal_7bec5859d40f14425fed131255050e210bcab6cb54341a6fbac040b8d65ece30->enter($__internal_7bec5859d40f14425fed131255050e210bcab6cb54341a6fbac040b8d65ece30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7bec5859d40f14425fed131255050e210bcab6cb54341a6fbac040b8d65ece30->leave($__internal_7bec5859d40f14425fed131255050e210bcab6cb54341a6fbac040b8d65ece30_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eeb8062911ac517a81181f6a6a52d139db2a60bb37e5085776823d48ae1f2b6c = $this->env->getExtension("native_profiler");
        $__internal_eeb8062911ac517a81181f6a6a52d139db2a60bb37e5085776823d48ae1f2b6c->enter($__internal_eeb8062911ac517a81181f6a6a52d139db2a60bb37e5085776823d48ae1f2b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eeb8062911ac517a81181f6a6a52d139db2a60bb37e5085776823d48ae1f2b6c->leave($__internal_eeb8062911ac517a81181f6a6a52d139db2a60bb37e5085776823d48ae1f2b6c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 24,  98 => 23,  87 => 13,  75 => 7,  61 => 25,  58 => 24,  56 => 23,  45 => 14,  43 => 13,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Welcome tw !{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/* */
/*     {% block stylesheets %}{% endblock %}*/
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>*/
/*       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/*   <body style="margin-top:50px;">*/
/* */
/*     {% block body %}{% endblock %}*/
/*     {% block javascripts %}{% endblock %}*/
/* */
/*     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*   </body>*/
/* </html>*/
/* */
