<?php

/* layout.twig */
class __TwigTemplate_c9b31bbfaea6302ac72c154e4c2286cc977acabe79d6dcc304612e7fd16492d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<meta charset=\"utf-8\" />
\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t<title>Rémi FAIVRE</title>

\t<link rel=\"stylesheet\" href=\"http://yui.yahooapis.com/pure/0.6.0/pure-min.css\">
\t<link rel=\"stylesheet\" href=\"http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css\">

\t";
        // line 12
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "mobile")) {
            // line 13
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/ressources/css/jquery.fullpage.css\">
\t";
        } else {
            // line 15
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/ressources/css/jquery.multiscroll.css\">
\t";
        }
        // line 17
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/ressources/css/main.css\">
      
\t<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
</head>
<body>
\t";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "
\t<script src=\"ressources/js/jquery.easings.min.js\"></script>
\t";
        // line 26
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "mobile")) {
            // line 27
            echo "\t\t<script type=\"text/javascript\" src=\"ressources/js/jquery.fullpage.js\"></script>
\t";
        } else {
            // line 29
            echo "\t\t<script type=\"text/javascript\" src=\"ressources/js/jquery.multiscroll.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"ressources/js/classie.js\"></script>
\t";
        }
        // line 32
        echo "\t<script type=\"text/javascript\" src=\"ressources/js/sidebarEffects.js\"></script>
</body>
</html>";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "\t";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  73 => 22,  67 => 32,  62 => 29,  58 => 27,  56 => 26,  52 => 24,  50 => 22,  43 => 17,  39 => 15,  35 => 13,  33 => 12,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/* 	<meta charset="utf-8" />*/
/* 	<meta http-equiv="x-ua-compatible" content="ie=edge">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/* 	<title>Rémi FAIVRE</title>*/
/* */
/* 	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">*/
/* 	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">*/
/* */
/* 	{% if isMobile == 'mobile' %}*/
/* 		<link rel="stylesheet" type="text/css" href="/ressources/css/jquery.fullpage.css">*/
/* 	{% else %}*/
/* 		<link rel="stylesheet" type="text/css" href="/ressources/css/jquery.multiscroll.css">*/
/* 	{% endif %}*/
/* 	<link rel="stylesheet" type="text/css" href="/ressources/css/main.css">*/
/*       */
/* 	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/* </head>*/
/* <body>*/
/* 	{% block body %}*/
/* 	{% endblock %}*/
/* */
/* 	<script src="ressources/js/jquery.easings.min.js"></script>*/
/* 	{% if isMobile == 'mobile' %}*/
/* 		<script type="text/javascript" src="ressources/js/jquery.fullpage.js"></script>*/
/* 	{% else %}*/
/* 		<script type="text/javascript" src="ressources/js/jquery.multiscroll.min.js"></script>*/
/* 		<script type="text/javascript" src="ressources/js/classie.js"></script>*/
/* 	{% endif %}*/
/* 	<script type="text/javascript" src="ressources/js/sidebarEffects.js"></script>*/
/* </body>*/
/* </html>*/
