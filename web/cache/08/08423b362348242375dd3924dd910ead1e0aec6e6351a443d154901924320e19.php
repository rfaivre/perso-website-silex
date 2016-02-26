<?php

/* index.twig */
class __TwigTemplate_d49e3191323811334c40741cec5126c18145944b10c658233cc778484d65de90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div id=\"st-container\" class=\"st-container\">

\t<nav class=\"st-menu st-effect-1\" id=\"menu-1\">
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a class=\"icon icon-data hvr-bounce-to-right\" href=\"#home\">
\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t<span>
\t\t\t\t\t\tAccueil
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"icon icon-location hvr-bounce-to-right\" href=\"#studies\">
\t\t\t\t\t<i class=\"fa fa-graduation-cap\"></i>
\t\t\t\t\t<span>
\t\t\t\t\t\tFormations
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"icon icon-location hvr-bounce-to-right\" href=\"#projects\">
\t\t\t\t\t<i class=\"fa fa-folder-open\"></i>
\t\t\t\t\t<span>
\t\t\t\t\t\tProjets
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"icon icon-study hvr-bounce-to-right\" href=\"#skills\">
\t\t\t\t\t<i class=\"fa fa-code\"></i>
\t\t\t\t\t<span>
\t\t\t\t\t\tCompétences
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"icon icon-photo hvr-bounce-to-right\" href=\"#contact\">
\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t<span>
\t\t\t\t\t\tContact
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"st-menu-bottom\">
\t\t\t<a href=\"\"><i class=\"fa fa-envelope\"></i></a>
\t\t\t<a href=\"\"><i class=\"fa fa-linkedin-square\"></i></a>
\t\t\t<a href=\"\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t<a href=\"\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t<a href=\"\"><i class=\"fa fa-twitter\"></i></a>
\t\t</div>
\t</nav>

\t<!-- content push wrapper -->
\t<div class=\"st-pusher\">

\t\t<div class=\"st-content container\">
\t\t\t<div class=\"st-content-inner\">

\t\t\t\t<header id=\"ha-header\" class=\"ha-header ha-header-large\">
\t\t\t\t\t<div class=\"ha-header-perspective\">
\t\t\t\t\t\t<div class=\"ha-header-front\">
\t\t\t\t\t\t\t<h1><span>Rémi FAIVRE</span></h1>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"st-trigger-effects\" class=\"column\">
\t\t\t\t\t\t\t\t<button data-effect=\"st-effect-1\" class=\"button-menu\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</header>

\t\t\t\t<div id=\"multiscroll\">

\t\t\t\t\t";
        // line 83
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "0")) {
            // line 84
            echo "\t\t\t\t\t    <div class=\"ms-left\">
\t\t\t\t\t    \t<!-- SECTION HOME -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"home\">
\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t\t        \t\t\t<h1>Bienvenue</h1>
\t\t\t\t\t\t        \t\t<p>Développeur web</p>
\t\t\t\t\t\t        \t\t<p>25 ans</p>
\t\t\t\t\t\t        \t\t<p>permis B</p>
\t\t\t\t\t        \t\t\t
\t\t\t\t\t        \t\t</div>
\t\t\t\t\t        \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t        <!-- END SECTION HOME -->
\t\t\t\t\t        <!-- SECTION STUDIES -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"studies\">
\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t\t        \t\t\t<h1>Formations</h1>
\t\t\t\t\t        \t\t\t
\t\t\t\t\t        \t\t</div>\t\t\t\t\t        \t\t
\t\t\t\t\t        \t</div>
\t\t\t\t        \t</div>
\t\t\t\t        \t<!-- END SECTION STUDIES -->
\t\t\t\t        \t<!-- SECTION SKILLS -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"skills\">
\t\t\t\t\t\t    \t<div class=\"wrap-section\">\t\t\t\t\t    \t\t
\t\t\t\t\t\t    \t\t<div class=\"section-container\">
\t\t\t\t\t\t    \t\t\t<h1>Compétences</h1>
\t\t\t\t\t\t    \t\t\t<div>
\t\t\t\t\t\t    \t\t\t\t<p>
\t\t\t\t\t\t\t    \t\t\t\tAu cours de mes études et mes diverses expériences, j'ai pu découvrir et approfondir différents langages de programmation. J'aime découvrir de nouvelles technologies et me tenir au courant des technologies et méthodes utilisés dans le monde du web.
\t\t\t\t\t\t\t    \t\t\t\t\t
\t\t\t\t\t\t    \t\t\t\t</p>
\t\t\t\t\t\t    \t\t\t</div>
\t\t\t\t\t\t    \t\t</div>

\t\t\t\t\t\t    \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t        <!-- END SECTION SKILLS -->
\t\t\t\t\t        <!-- SECTION CONTACT -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"contact\">
\t\t\t\t\t\t    \t<div class=\"wrap-section\">
\t\t\t\t\t\t    \t\t<div class=\"section-container\">
\t\t\t\t\t\t    \t\t\t<h1>Contact</h1>
\t\t\t\t\t\t    \t\t\t
\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t    \t\t
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t        <!-- END SECTION CONTACT -->
\t\t\t\t\t    </div>
\t\t\t\t\t";
        }
        // line 137
        echo "
\t\t\t\t    <div class=\"ms-right\" id=\"fullpage\">

\t\t\t\t        <div class=\"ms-section section section-home\" data-anchor=\"home\">
\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t        \t\t<div class=\"section-sontainer\">
\t\t\t\t        \t\t\tSituation professionelle: en recherche active de poste
\t\t\t\t        \t\t\t
\t\t\t\t        \t\t</div>
\t\t\t\t\t        \t
\t\t\t\t\t        \t
\t\t\t\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"ms-section section section-studies\" data-anchor=\"studies\">
\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t        \t\t\t
\t\t\t\t\t\t        \t";
        // line 155
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "1")) {
            // line 156
            echo "\t\t\t\t\t\t        \t\t<h1>Formations</h1>
\t\t\t\t\t\t        \t";
        }
        // line 158
        echo "\t\t\t\t\t\t        \t<div>
\t\t\t\t\t        \t\t\tSection droite 2
\t\t\t\t\t\t        \t\t
\t\t\t\t\t\t        \t</div>
\t\t\t\t        \t\t</div>
\t\t\t\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"ms-section section section-skills\" data-anchor=\"skills\">
\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t        \t\t\t
\t\t\t\t\t        \t\t";
        // line 170
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "1")) {
            // line 171
            echo "\t\t\t\t\t        \t\t\t<h1>Compétences</h1>
\t\t\t\t\t        \t\t";
        }
        // line 173
        echo "\t\t\t\t\t        \t\t<div>
\t\t\t\t\t        \t\t\t<h2>Langages Web</h2>
\t\t\t\t\t        \t\t\t
\t\t\t\t\t        \t\t\t<p>
\t\t\t\t\t\t        \t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae accumsan velit, quis commodo justo. Vivamus tellus ante, pellentesque vitae velit at, finibus condimentum purus. Cras nunc mi, tempor scelerisque convallis vel, dapibus in lorem. Donec molestie tellus iaculis augue eleifend commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse leo lacus, fringilla in faucibus elementum, malesuada sit amet massa. Proin eget nisi lorem. Sed nec viverra metus, congue bibendum lacus. Integer euismod arcu ut sagittis aliquet. Cras id varius neque. Cras eget augue tincidunt libero pulvinar auctor. Integer lacinia, erat commodo aliquet posuere, lorem diam faucibus nisi, at tristique mauris magna ut diam.
\t\t\t\t\t\t        \t\t\t\t
\t\t\t\t\t        \t\t\t</p>

\t\t\t\t        \t\t</div>
\t\t\t\t        \t\t
\t\t\t\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        ";
        // line 186
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "0")) {
            // line 187
            echo "\t\t\t\t\t        <div class=\"ms-section section section-contact\" data-anchor=\"contact\">
\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t\t\t\t\t\t\tSection droite 4
\t\t\t\t\t        \t\t\t
\t\t\t\t\t        \t\t</div>
\t\t\t\t\t        \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t    ";
        } else {
            // line 196
            echo "\t\t\t\t\t    \t<div class=\"ms-section section section-contact\" data-anchor=\"contact\">
\t\t\t\t\t    \t\t<div class=\"slide\">
\t\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t\t\t\t\t\t\t\t<h1>Contact</h1>
\t\t\t\t\t\t        \t\t\tgttgggrggtr
\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t        \t</div>
\t\t\t\t\t    \t\t\t
\t\t\t\t\t    \t\t</div>
\t\t\t\t\t    \t\t<div class=\"slide\">
\t\t\t\t\t    \t\t\t<div class=\"wrap-section\">
\t\t\t\t\t    \t\t\t\t<div class=\"section-container\">
\t\t\t\t\t\t\t\t\t\t\tazdedferefre
\t\t\t\t\t    \t\t\t\t\t
\t\t\t\t\t    \t\t\t\t</div>
\t\t\t\t\t\t        \t</div>
\t\t\t\t\t    \t\t\t
\t\t\t\t\t    \t\t</div>
\t\t\t\t\t        </div>

\t\t\t\t\t    ";
        }
        // line 218
        echo "\t\t\t\t    </div>
\t\t\t\t</div>

\t\t\t\t";
        // line 221
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "0")) {
            // line 222
            echo "
\t\t\t\t\t<div id=\"multiscroll-nav\" class=\"animated slideInRight multiscroll-nav-class\">
\t\t\t\t\t\t<ul id=\"multiscroll-menu\">\t\t\t\t\t\t    
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 228
        echo "

\t\t\t</div>
\t\t</div>

\t</div>
</div>

\t<script type=\"text/javascript\">
\t\tvar isMobile = \"";
        // line 237
        echo twig_escape_filter($this->env, (isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")), "html", null, true);
        echo "\"; 
\t</script>
\t<script type=\"text/javascript\" src=\"ressources/js/main.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 237,  282 => 228,  274 => 222,  272 => 221,  267 => 218,  243 => 196,  232 => 187,  230 => 186,  215 => 173,  211 => 171,  209 => 170,  195 => 158,  191 => 156,  189 => 155,  169 => 137,  114 => 84,  112 => 83,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* <div id="st-container" class="st-container">*/
/* */
/* 	<nav class="st-menu st-effect-1" id="menu-1">*/
/* 		<ul>*/
/* 			<li>*/
/* 				<a class="icon icon-data hvr-bounce-to-right" href="#home">*/
/* 					<i class="fa fa-home"></i>*/
/* 					<span>*/
/* 						Accueil*/
/* 					</span>*/
/* 				</a>*/
/* 			</li>*/
/* 			<li>*/
/* 				<a class="icon icon-location hvr-bounce-to-right" href="#studies">*/
/* 					<i class="fa fa-graduation-cap"></i>*/
/* 					<span>*/
/* 						Formations*/
/* 					</span>*/
/* 				</a>*/
/* 			</li>*/
/* 			<li>*/
/* 				<a class="icon icon-location hvr-bounce-to-right" href="#projects">*/
/* 					<i class="fa fa-folder-open"></i>*/
/* 					<span>*/
/* 						Projets*/
/* 					</span>*/
/* 				</a>*/
/* 			</li>*/
/* 			<li>*/
/* 				<a class="icon icon-study hvr-bounce-to-right" href="#skills">*/
/* 					<i class="fa fa-code"></i>*/
/* 					<span>*/
/* 						Compétences*/
/* 					</span>*/
/* 				</a>*/
/* 			</li>*/
/* 			<li>*/
/* 				<a class="icon icon-photo hvr-bounce-to-right" href="#contact">*/
/* 					<i class="fa fa-envelope"></i>*/
/* 					<span>*/
/* 						Contact*/
/* 					</span>*/
/* 				</a>*/
/* 			</li>*/
/* 		</ul>*/
/* 		<div class="st-menu-bottom">*/
/* 			<a href=""><i class="fa fa-envelope"></i></a>*/
/* 			<a href=""><i class="fa fa-linkedin-square"></i></a>*/
/* 			<a href=""><i class="fa fa-facebook"></i></a>*/
/* 			<a href=""><i class="fa fa-google-plus"></i></a>*/
/* 			<a href=""><i class="fa fa-twitter"></i></a>*/
/* 		</div>*/
/* 	</nav>*/
/* */
/* 	<!-- content push wrapper -->*/
/* 	<div class="st-pusher">*/
/* */
/* 		<div class="st-content container">*/
/* 			<div class="st-content-inner">*/
/* */
/* 				<header id="ha-header" class="ha-header ha-header-large">*/
/* 					<div class="ha-header-perspective">*/
/* 						<div class="ha-header-front">*/
/* 							<h1><span>Rémi FAIVRE</span></h1>*/
/* 								*/
/* 							<div id="st-trigger-effects" class="column">*/
/* 								<button data-effect="st-effect-1" class="button-menu">*/
/* 									<i></i>*/
/* 									<i></i>*/
/* 									<i></i>*/
/* 								</button>*/
/* 							</div>*/
/* 						</div>						*/
/* 					</div>*/
/* 				</header>*/
/* */
/* 				<div id="multiscroll">*/
/* */
/* 					{% if isMobile == "0" %}*/
/* 					    <div class="ms-left">*/
/* 					    	<!-- SECTION HOME -->*/
/* 					        <div class="ms-section" data-anchor="home">*/
/* 					        	<div class="wrap-section">*/
/* 					        		<div class="section-container">*/
/* 					        			<h1>Bienvenue</h1>*/
/* 						        		<p>Développeur web</p>*/
/* 						        		<p>25 ans</p>*/
/* 						        		<p>permis B</p>*/
/* 					        			*/
/* 					        		</div>*/
/* 					        	</div>*/
/* 					        </div>*/
/* 					        <!-- END SECTION HOME -->*/
/* 					        <!-- SECTION STUDIES -->*/
/* 					        <div class="ms-section" data-anchor="studies">*/
/* 					        	<div class="wrap-section">*/
/* 					        		<div class="section-container">*/
/* 					        			<h1>Formations</h1>*/
/* 					        			*/
/* 					        		</div>					        		*/
/* 					        	</div>*/
/* 				        	</div>*/
/* 				        	<!-- END SECTION STUDIES -->*/
/* 				        	<!-- SECTION SKILLS -->*/
/* 					        <div class="ms-section" data-anchor="skills">*/
/* 						    	<div class="wrap-section">					    		*/
/* 						    		<div class="section-container">*/
/* 						    			<h1>Compétences</h1>*/
/* 						    			<div>*/
/* 						    				<p>*/
/* 							    				Au cours de mes études et mes diverses expériences, j'ai pu découvrir et approfondir différents langages de programmation. J'aime découvrir de nouvelles technologies et me tenir au courant des technologies et méthodes utilisés dans le monde du web.*/
/* 							    					*/
/* 						    				</p>*/
/* 						    			</div>*/
/* 						    		</div>*/
/* */
/* 						    	</div>*/
/* 					        </div>*/
/* 					        <!-- END SECTION SKILLS -->*/
/* 					        <!-- SECTION CONTACT -->*/
/* 					        <div class="ms-section" data-anchor="contact">*/
/* 						    	<div class="wrap-section">*/
/* 						    		<div class="section-container">*/
/* 						    			<h1>Contact</h1>*/
/* 						    			*/
/* 						    		</div>*/
/* 						    		*/
/* 						    	</div>*/
/* 					        </div>*/
/* 					        <!-- END SECTION CONTACT -->*/
/* 					    </div>*/
/* 					{% endif %}*/
/* */
/* 				    <div class="ms-right" id="fullpage">*/
/* */
/* 				        <div class="ms-section section section-home" data-anchor="home">*/
/* 				        	<div class="wrap-section">*/
/* 				        		<div class="section-sontainer">*/
/* 				        			Situation professionelle: en recherche active de poste*/
/* 				        			*/
/* 				        		</div>*/
/* 					        	*/
/* 					        	*/
/* 				        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        <div class="ms-section section section-studies" data-anchor="studies">*/
/* 				        	<div class="wrap-section">*/
/* 				        		<div class="section-container">*/
/* 				        			*/
/* 						        	{% if isMobile == "1" %}*/
/* 						        		<h1>Formations</h1>*/
/* 						        	{% endif %}*/
/* 						        	<div>*/
/* 					        			Section droite 2*/
/* 						        		*/
/* 						        	</div>*/
/* 				        		</div>*/
/* 				        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        <div class="ms-section section section-skills" data-anchor="skills">*/
/* 				        	<div class="wrap-section">*/
/* 				        		<div class="section-container">*/
/* 				        			*/
/* 					        		{% if isMobile == "1" %}*/
/* 					        			<h1>Compétences</h1>*/
/* 					        		{% endif %}*/
/* 					        		<div>*/
/* 					        			<h2>Langages Web</h2>*/
/* 					        			*/
/* 					        			<p>*/
/* 						        			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae accumsan velit, quis commodo justo. Vivamus tellus ante, pellentesque vitae velit at, finibus condimentum purus. Cras nunc mi, tempor scelerisque convallis vel, dapibus in lorem. Donec molestie tellus iaculis augue eleifend commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse leo lacus, fringilla in faucibus elementum, malesuada sit amet massa. Proin eget nisi lorem. Sed nec viverra metus, congue bibendum lacus. Integer euismod arcu ut sagittis aliquet. Cras id varius neque. Cras eget augue tincidunt libero pulvinar auctor. Integer lacinia, erat commodo aliquet posuere, lorem diam faucibus nisi, at tristique mauris magna ut diam.*/
/* 						        				*/
/* 					        			</p>*/
/* */
/* 				        		</div>*/
/* 				        		*/
/* 				        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        {% if isMobile == "0" %}*/
/* 					        <div class="ms-section section section-contact" data-anchor="contact">*/
/* 					        	<div class="wrap-section">*/
/* 					        		<div class="section-container">*/
/* 										Section droite 4*/
/* 					        			*/
/* 					        		</div>*/
/* 					        	</div>*/
/* 					        </div>*/
/* 					    {% else %}*/
/* 					    	<div class="ms-section section section-contact" data-anchor="contact">*/
/* 					    		<div class="slide">*/
/* 						        	<div class="wrap-section">*/
/* 						        		<div class="section-container">*/
/* 											<h1>Contact</h1>*/
/* 						        			gttgggrggtr*/
/* 						        		</div>*/
/* 						        	</div>*/
/* 					    			*/
/* 					    		</div>*/
/* 					    		<div class="slide">*/
/* 					    			<div class="wrap-section">*/
/* 					    				<div class="section-container">*/
/* 											azdedferefre*/
/* 					    					*/
/* 					    				</div>*/
/* 						        	</div>*/
/* 					    			*/
/* 					    		</div>*/
/* 					        </div>*/
/* */
/* 					    {% endif %}*/
/* 				    </div>*/
/* 				</div>*/
/* */
/* 				{% if isMobile == "0" %}*/
/* */
/* 					<div id="multiscroll-nav" class="animated slideInRight multiscroll-nav-class">*/
/* 						<ul id="multiscroll-menu">						    */
/* 						</ul>*/
/* 					</div>*/
/* 				{% endif %}*/
/* */
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* 	<script type="text/javascript">*/
/* 		var isMobile = "{{ isMobile }}"; */
/* 	</script>*/
/* 	<script type="text/javascript" src="ressources/js/main.js"></script>*/
/* {% endblock %}*/
/* */
/* */
