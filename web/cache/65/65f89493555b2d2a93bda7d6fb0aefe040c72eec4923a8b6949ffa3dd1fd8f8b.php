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


\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/ressources/css/jquery.fullpage.css\">

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/ressources/css/jquery.multiscroll.css\">

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/ressources/css/main.css\">
      
\t<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
</head>
<body>

\t";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "
\t<script src=\"ressources/js/jquery.easings.min.js\"></script>

\t\t<script type=\"text/javascript\" src=\"ressources/js/jquery.fullpage.js\"></script>

\t\t<script type=\"text/javascript\" src=\"ressources/js/jquery.multiscroll.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"ressources/js/classie.js\"></script>

\t<script type=\"text/javascript\" src=\"ressources/js/sidebarEffects.js\"></script>
</body>
</html>";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "\t";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  60 => 23,  46 => 25,  44 => 23,  20 => 1,);
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
/* */
/* 		<link rel="stylesheet" type="text/css" href="/ressources/css/jquery.fullpage.css">*/
/* */
/* 		<link rel="stylesheet" type="text/css" href="/ressources/css/jquery.multiscroll.css">*/
/* */
/* 	<link rel="stylesheet" type="text/css" href="/ressources/css/main.css">*/
/*       */
/* 	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/* </head>*/
/* <body>*/
/* */
/* 	{% block body %}*/
/* 	{% endblock %}*/
/* */
/* 	<script src="ressources/js/jquery.easings.min.js"></script>*/
/* */
/* 		<script type="text/javascript" src="ressources/js/jquery.fullpage.js"></script>*/
/* */
/* 		<script type="text/javascript" src="ressources/js/jquery.multiscroll.min.js"></script>*/
/* 		<script type="text/javascript" src="ressources/js/classie.js"></script>*/
/* */
/* 	<script type="text/javascript" src="ressources/js/sidebarEffects.js"></script>*/
/* </body>*/
/* </html>*/
