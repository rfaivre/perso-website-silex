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
        $context["isMobileClass"] = ((((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "0")) ? ("no-mobile") : ("mobile"));
        // line 5
        echo "
<div id=\"st-container\" class=\"st-container\">

\t";
        // line 8
        $this->loadTemplate("navbar.twig", "index.twig", 8)->display($context);
        // line 9
        echo "
\t<!-- content push wrapper -->
\t<div class=\"st-pusher\">

\t\t<div class=\"st-content container\">
\t\t\t<div class=\"st-content-inner\">

\t\t\t\t<header id=\"ha-header\" class=\"ha-header ha-header-large\">
\t\t\t\t\t<div class=\"ha-header-perspective\">
\t\t\t\t\t\t<div class=\"ha-header-front\">
\t\t\t\t\t\t\t<h1><span>Rémi FAIVRE</span></h1>
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
        // line 33
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "0")) {
            // line 34
            echo "\t\t\t\t\t    <div class=\"ms-left\">
\t\t\t\t\t    \t<!-- SECTION HOME -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"home\">
\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t        \t\t\t\t<h2>/ Accueil</h2>
\t\t\t\t        \t\t\t\t<div class=\"sub-container\">
\t\t\t\t\t        \t\t\t\t<p class=\"intro\">
\t\t\t\t\t\t\t\t\t\t\t\tJe m'appelle Rémi Faivre. Je suis développeur web, actuellement à la recherche d'un emploi suite à ma dernière expérience. Je vous laisse découvrir mon site afin de découvrir un peu plus mon parcours, mes expériences professionnelles ainsi que mes compétences. <br />Je vous laisse me contacter si mon profil vous intéresse!
\t\t\t\t\t\t\t\t\t\t\t\t<br /><br />A très bientôt <i class=\"fa fa-smile-o\"></i> !
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t        \t\t\t</div>
\t\t\t\t\t        \t\t</div>
\t\t\t\t\t        \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t        <!-- END SECTION HOME -->
\t\t\t\t\t        <!-- SECTION STUDIES -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"studies\">
\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t\t        \t\t\t<h2>/ Formations</h2>
\t\t\t\t\t        \t\t\t<div class=\"sub-container\">
\t\t\t\t\t        \t\t\t\t<p class=\"intro\">
\t\t\t\t\t        \t\t\t\t\tSuite à l'obtention de mon baccalauréat Scientifique obtenu avec la mention assez bien, je me suis dirigé vers une licence Informatique à l'Université de Franche-Comté à Besançon (25). C'est lors de cette licence que j'ai décidé de m'orienter vers le domaine du web. Après l'obtention de ma licence, j'ai donc décidé de me diriger vers un Master IIAM (Image et Intelligence Artificielle, Multimédia) option Multimédia réalisé à l'Université de Bourgogne à Dijon (21). Ce Master m'a permis de compléter ma formation pour travailler dans les métiers du web.
\t\t\t\t\t        \t\t\t\t</p>
\t\t\t\t\t        \t\t\t</div>
\t\t\t\t\t        \t\t</div>\t\t\t\t\t        \t\t
\t\t\t\t\t        \t</div>
\t\t\t\t        \t</div>
\t\t\t\t        \t<!-- END SECTION STUDIES -->
\t\t\t\t        \t<!-- SECTION SKILLS -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"skills\">
\t\t\t\t\t\t    \t<div class=\"wrap-section\">\t\t\t\t\t    \t\t
\t\t\t\t\t\t    \t\t<div class=\"section-container\">
\t\t\t\t\t\t    \t\t\t<h2>/ Compétences</h2>
\t\t\t\t\t\t    \t\t\t<div class=\"sub-container\">
\t\t\t\t\t\t    \t\t\t\t<p class=\"intro\">
\t\t\t\t\t\t\t    \t\t\t\tAu cours de mes études et mes diverses expériences, j'ai pu découvrir et approfondir différents langages de programmation. J'aime découvrir de nouvelles technologies et me tenir au courant des technologies et méthodes utilisés dans le monde du web. Pour cela, j'aime effectuer de la veille technologique à titre personnel.
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
\t\t\t\t\t\t    \t\t\t<h2>/ Contact</h2>
\t\t\t\t\t\t    \t\t\t<div class=\"sub-container\">
\t\t\t\t\t\t    \t\t\t\t<p class=\"intro\">
\t\t\t\t\t\t    \t\t\t\t\tVous pouvez bien sûr me contacter, via ce formulaire de contact, via mon adresse mail, ou bien via les réseaux sociaux linkedin
\t\t\t\t\t\t    \t\t\t\t</p>
\t\t\t\t\t\t    \t\t\t</div>
\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t    \t\t
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t        <!-- END SECTION CONTACT -->
\t\t\t\t\t    </div>
\t\t\t\t\t";
        }
        // line 97
        echo "
\t\t\t\t    <div class=\"ms-right ";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["isMobileClass"]) ? $context["isMobileClass"] : $this->getContext($context, "isMobileClass")), "html", null, true);
        echo "\" id=\"fullpage\">

\t\t\t\t        <div class=\"ms-section section section-home\" data-anchor=\"home\">
\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t        \t\t\t";
        // line 103
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "1")) {
            // line 104
            echo "\t\t\t\t\t\t        \t\t<h2>/ Accueil</h2>
\t\t\t\t\t\t        \t";
        }
        // line 106
        echo "\t\t\t\t        \t\t\t<div class=\"sub-container\">
\t\t\t\t\t\t\t\t\t\t";
        // line 107
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "1")) {
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"intro\">
\t\t\t\t\t\t\t\t\t\t\t\tJe m'appelle Rémi Faivre. Je suis développeur web, actuellement à la recherche d'un emploi suite à ma dernière expérience. Je vous laisse découvrir mon site afin de découvrir un peu plus mon parcours, mes expériences professionnelles ainsi que mes compétences. <br />Je vous laisse me contacter si mon profil vous intéresse <i class=\"fa fa-smile-o\"></i> !
\t\t\t\t\t\t\t\t\t\t\t\t<br /><br />A très bientôt!
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t\t\t\t\t\t\t<h3>// A mon sujet</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t        \t\t\t\t\t\t<p><span>Nom </span><span>Faivre</span></p>
\t\t\t\t\t\t\t        \t\t<p><span>Prénom</span><span>Rémi</span></p>
\t\t\t\t\t\t\t        \t\t<p><span>Âge</span><span>25 ans</span></p>\t\t\t\t        \t\t
\t\t\t\t\t\t\t        \t\t<p><span>Mail</span><span>rfaivre91@gmail.com</span></p>\t\t\t\t\t        \t\t
\t\t\t\t\t\t\t        \t\t<p><span>Situation professionelle</span><span>En recherche active</span></p>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t        \t\t\t\t</div>
\t\t\t\t        \t\t</div>\t\t\t\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"ms-section section section-studies\" data-anchor=\"studies\">
\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t        \t\t<div class=\"section-container\">\t\t\t\t        \t\t\t
\t\t\t\t\t\t        \t";
        // line 128
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "1")) {
            // line 129
            echo "\t\t\t\t\t\t        \t\t<h2>/ Formations</h2>
\t\t\t\t\t\t        \t";
        }
        // line 131
        echo "\t\t\t\t\t\t        \t<div class=\"sub-container\">\t\t\t\t\t\t        \t\t
\t\t\t\t\t\t        \t\t";
        // line 132
        $this->loadTemplate("studies.twig", "index.twig", 132)->display($context);
        // line 133
        echo "\t\t\t\t\t\t        \t</div>
\t\t\t\t        \t\t</div>
\t\t\t\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"ms-section section section-skills\" data-anchor=\"skills\">
\t\t\t\t\t        ";
        // line 139
        $this->loadTemplate("skills.twig", "index.twig", 139)->display(array_merge($context, array("isMobile" => (isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")))));
        // line 140
        echo "\t\t\t\t        </div>

\t\t\t\t        <div class=\"ms-section section section-contact\" data-anchor=\"contact\">
\t\t\t\t        \t";
        // line 143
        $this->loadTemplate("contact.twig", "index.twig", 143)->display(array_merge($context, array("isMobile" => (isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")))));
        echo "\t\t\t\t        \t
\t\t\t\t        </div>
\t\t\t\t    </div>
\t\t\t\t</div>

\t\t\t\t";
        // line 148
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "0")) {
            // line 149
            echo "
\t\t\t\t\t<div id=\"multiscroll-nav\" class=\"animated slideInRight multiscroll-nav-class\">
\t\t\t\t\t\t<ul id=\"multiscroll-menu\">\t\t\t\t\t\t    
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 155
        echo "
\t\t
\t\t\t</div>

\t\t\t<div class=\"footer-fixed\"></div>
\t\t</div>

\t</div>
</div>

<div class=\"landscape\">
\t<div>
\t\tL'orientation paysage n'est pas encore tout à fait au optimisé, j'y travaille...\t
\t</div>
</div>

\t<script type=\"text/javascript\">
\t\tvar isMobile = \"";
        // line 172
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
        return array (  242 => 172,  223 => 155,  215 => 149,  213 => 148,  205 => 143,  200 => 140,  198 => 139,  190 => 133,  188 => 132,  185 => 131,  181 => 129,  179 => 128,  162 => 113,  155 => 108,  153 => 107,  150 => 106,  146 => 104,  144 => 103,  136 => 98,  133 => 97,  68 => 34,  66 => 33,  40 => 9,  38 => 8,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* {% block body %}*/
/* {% set isMobileClass = (isMobile == "0"? "no-mobile": "mobile") %}*/
/* */
/* <div id="st-container" class="st-container">*/
/* */
/* 	{% include "navbar.twig" %}*/
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
/* 				        				<h2>/ Accueil</h2>*/
/* 				        				<div class="sub-container">*/
/* 					        				<p class="intro">*/
/* 												Je m'appelle Rémi Faivre. Je suis développeur web, actuellement à la recherche d'un emploi suite à ma dernière expérience. Je vous laisse découvrir mon site afin de découvrir un peu plus mon parcours, mes expériences professionnelles ainsi que mes compétences. <br />Je vous laisse me contacter si mon profil vous intéresse!*/
/* 												<br /><br />A très bientôt <i class="fa fa-smile-o"></i> !*/
/* 											</p>*/
/* 					        			</div>*/
/* 					        		</div>*/
/* 					        	</div>*/
/* 					        </div>*/
/* 					        <!-- END SECTION HOME -->*/
/* 					        <!-- SECTION STUDIES -->*/
/* 					        <div class="ms-section" data-anchor="studies">*/
/* 					        	<div class="wrap-section">*/
/* 					        		<div class="section-container">*/
/* 					        			<h2>/ Formations</h2>*/
/* 					        			<div class="sub-container">*/
/* 					        				<p class="intro">*/
/* 					        					Suite à l'obtention de mon baccalauréat Scientifique obtenu avec la mention assez bien, je me suis dirigé vers une licence Informatique à l'Université de Franche-Comté à Besançon (25). C'est lors de cette licence que j'ai décidé de m'orienter vers le domaine du web. Après l'obtention de ma licence, j'ai donc décidé de me diriger vers un Master IIAM (Image et Intelligence Artificielle, Multimédia) option Multimédia réalisé à l'Université de Bourgogne à Dijon (21). Ce Master m'a permis de compléter ma formation pour travailler dans les métiers du web.*/
/* 					        				</p>*/
/* 					        			</div>*/
/* 					        		</div>					        		*/
/* 					        	</div>*/
/* 				        	</div>*/
/* 				        	<!-- END SECTION STUDIES -->*/
/* 				        	<!-- SECTION SKILLS -->*/
/* 					        <div class="ms-section" data-anchor="skills">*/
/* 						    	<div class="wrap-section">					    		*/
/* 						    		<div class="section-container">*/
/* 						    			<h2>/ Compétences</h2>*/
/* 						    			<div class="sub-container">*/
/* 						    				<p class="intro">*/
/* 							    				Au cours de mes études et mes diverses expériences, j'ai pu découvrir et approfondir différents langages de programmation. J'aime découvrir de nouvelles technologies et me tenir au courant des technologies et méthodes utilisés dans le monde du web. Pour cela, j'aime effectuer de la veille technologique à titre personnel.*/
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
/* 						    			<h2>/ Contact</h2>*/
/* 						    			<div class="sub-container">*/
/* 						    				<p class="intro">*/
/* 						    					Vous pouvez bien sûr me contacter, via ce formulaire de contact, via mon adresse mail, ou bien via les réseaux sociaux linkedin*/
/* 						    				</p>*/
/* 						    			</div>*/
/* 						    		</div>*/
/* 						    		*/
/* 						    	</div>*/
/* 					        </div>*/
/* 					        <!-- END SECTION CONTACT -->*/
/* 					    </div>*/
/* 					{% endif %}*/
/* */
/* 				    <div class="ms-right {{ isMobileClass }}" id="fullpage">*/
/* */
/* 				        <div class="ms-section section section-home" data-anchor="home">*/
/* 				        	<div class="wrap-section">*/
/* 				        		<div class="section-container">*/
/* 				        			{% if isMobile == "1" %}*/
/* 						        		<h2>/ Accueil</h2>*/
/* 						        	{% endif %}*/
/* 				        			<div class="sub-container">*/
/* 										{% if isMobile =="1" %}*/
/* 											<p class="intro">*/
/* 												Je m'appelle Rémi Faivre. Je suis développeur web, actuellement à la recherche d'un emploi suite à ma dernière expérience. Je vous laisse découvrir mon site afin de découvrir un peu plus mon parcours, mes expériences professionnelles ainsi que mes compétences. <br />Je vous laisse me contacter si mon profil vous intéresse <i class="fa fa-smile-o"></i> !*/
/* 												<br /><br />A très bientôt!*/
/* 											</p>*/
/* 										{% endif %}*/
/* 										<h3>// A mon sujet</h3>*/
/* 										<div class="content">*/
/* 			        						<p><span>Nom </span><span>Faivre</span></p>*/
/* 							        		<p><span>Prénom</span><span>Rémi</span></p>*/
/* 							        		<p><span>Âge</span><span>25 ans</span></p>				        		*/
/* 							        		<p><span>Mail</span><span>rfaivre91@gmail.com</span></p>					        		*/
/* 							        		<p><span>Situation professionelle</span><span>En recherche active</span></p>								*/
/* 										</div>*/
/* 			        				</div>*/
/* 				        		</div>				        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        <div class="ms-section section section-studies" data-anchor="studies">*/
/* 				        	<div class="wrap-section">*/
/* 				        		<div class="section-container">				        			*/
/* 						        	{% if isMobile == "1" %}*/
/* 						        		<h2>/ Formations</h2>*/
/* 						        	{% endif %}*/
/* 						        	<div class="sub-container">						        		*/
/* 						        		{% include "studies.twig" %}*/
/* 						        	</div>*/
/* 				        		</div>*/
/* 				        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        <div class="ms-section section section-skills" data-anchor="skills">*/
/* 					        {% include "skills.twig" with {'isMobile': isMobile } %}*/
/* 				        </div>*/
/* */
/* 				        <div class="ms-section section section-contact" data-anchor="contact">*/
/* 				        	{% include "contact.twig" with {'isMobile': isMobile } %}				        	*/
/* 				        </div>*/
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
/* 		*/
/* 			</div>*/
/* */
/* 			<div class="footer-fixed"></div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <div class="landscape">*/
/* 	<div>*/
/* 		L'orientation paysage n'est pas encore tout à fait au optimisé, j'y travaille...	*/
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
