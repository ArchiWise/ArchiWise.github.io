<!--<img id="fancy" alt="diagram" width="40%" src="handtest.jpg">-->
<html>
  <head>
    <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  </head>
  <body>
    <h2>Latest news</h2>
    <script type="text/javascript" language="JavaScript"><!--

function selectService(servicename){
	if(servicename.length < 1) { return; }

	var services = new Array();
	services[0] = 'ilean';
	services[1] = 'secappdev';
	services[2] = 'htpl';
	services[3] = 'agileopen';
	services[4] = 'xpdays2011';
	services[5] = 'qabelgaf2011';
  services[6] = 'werktNietBelgaf2011';
  services[7] = 'A3belgaf2012';
  services[8] = 'PuppetBelgAF2012';
  services[9] = 'xpdays2012werewolves';
  services[10] = 'xpdays2012puppet';
  services[11] = 'baea2012';
    services[12] = 'belgafdoc2013';
  
	for (i=0;i<services.length;i++)
	{
		if(services[i] == servicename){
			ReverseContentDisplay(servicename);
		} else{
			HideContent(services[i]);
		}
	}
}

function HideContent(d) {
if(d.length < 1) { return; }
document.getElementById(d).style.display = "none";
}

function ShowContent(d) {
if(d.length < 1) { return; }
document.getElementById(d).style.display = "block";
}

function ReverseContentDisplay(d) {
if(d.length < 1) { return; }
if(document.getElementById(d).style.display != "block") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}

//--></script>
    <ul>
    <li> <b>How much architecture documentation is needed?</b>, discussion organized
        at BelgAF by Alexander (<a href="javascript:selectService('belgafdoc2013');">more
          information</a>), 17/01/2013
        <div class="servicedetails" id="belgafdoc2013">
          <p>Time-boxed discussion on the following topics:</p>
          <p><ul>
          <li>When to write documentation?</li>
          <li>How good should models be?</li>
          <li>When to update documentation?</li>
          <li>Documentation longevity</li>
          <li>Continuously evolving documentation</li>
          <li>Tools for architecture documentation</li>
          <li>Evaluating architecture documentation</li>
          </ul>
          </p>
           (<a href="http://www.belgaf.be">BelgAF
            session website</a>)
           </div>
        <p></p>
      </li>
    
      <li> <b>What works in it architecture ... and what doesn't?</b>, workshop organized
        with the BelgAF collegues and Kurt Cuijpers at BAEA (<a href="javascript:selectService('baea2012');">more
          information</a>), 13/12/2012
        <div class="servicedetails" id="baea2012">
          <p><b>Abstract</b></p>
          <p>In this session we will, with the help of the audience, share experiences on what works and what doesn?t work in IT Architecture. In the last ten years, many people have been working on establishing an IT Architecture profession. Several methods and techniques, described in TOGAF, DYA and similar very well known sources, have been tried. Some of those methods and techniques seem to work very well, others don?t seem to work at all. Because of this mixed advice, getting IT Architecture up to expectations has been a daunting task that is far from complete.</p><p>

The first part of the evening will be highly interactive with the audience sharing some of their own experiences of what works and what doesn?t work in an IT Architecture Practice. Several BelgAF members will moderate, creating a framework for discussion and provide a wrap-up of what has been said.</p><p>

Kurt Cuijpers, chief architect at De Lijn, closes the evening with the story of his real world experiences in ?dos and don?ts? in IT Architecture at large and complex organisation like De Lijn, particularly in dealing with external providers of solutions.</p><p>

This session is offered by The Belgian Architecture Forum for a Digital World (or short: BelgAF, http://www.belgaf.be/ ). It is a non-profit organization in Belgium organising in-depth discussions and sessions like this one with the aim of professionalizing IT Architecture by sharing experience and knowledge, working on creating new insights and helping new IT Architects find their way. </p>
           <p></p>
          (<a href="http://www.baea.be/2012/10/ea-cafe-17-what-works-in-it-architecture-and-what-doesnt/">session website @BAEA
            </a>, <a href="http://www.belgaf.be/event/what-works-it-architecture-and-what-doesnt">session website @BelgAF
            </a> )
        </div>
        <p></p>
      </li>
      
      <li> <b>Automating server installation and maintenance with Puppet</b>, hands-on session presented
        at XP-days, together with Johan Peeters (<a href="javascript:selectService('xpdays2012puppet');">more
          information</a>), 29/11/2012
        <div class="servicedetails" id="xpdays2012puppet">
          <p><b>Description</b></p>
          <p>Before we used Puppet, server infrastructure was a source of frustration. It was something we did not have under control.</p><p>
Here are 2 examples from our experience: 
          <ol>
            <li>In application development, you invariably need a server to test on while developing, one for integration testing, one for acceptance testing, and then of course, the production servers. Would it not be good, if their setup was repeatable and automated, and you could rely on all those servers having exactly the same configuration? This is what Puppet enables. </li><li>
            If there are several development groups, they all need CI tools such as build servers and code repositories. Rather than setting those up by hand, you could be writing Puppet scripts to provision them. This has the added benefit of simplifying recovery from failure: when a server fails, you simply provision another one with Puppet. </li></ol>
</p><p>          
Puppet is an open source configuration management tool that uses a declarative configuration language giving developers and system administrators control over complex server configurations. Puppet is designed to manage the configuration of Unix and Microsoft Windows systems. Puppet competes in the automated configuration management niche with other tools such as Chef and CFEngine.</p><p>
In this session, we want you to get a flavor of Puppet's possibilities and limitations by working through some hands-on exercises. At the end of the session, we share experiences and debate where the use of Puppet is appropriate. </p><p>
The session is based on the tutorial and learning VM provided by Puppet Labs. We coach participants to work through the tutorial and provide help with the most relevant exercises. While the tutorial and learning VM are great for self-study, we believe we can accelerate participants? learning by focusing on salient points, encouraging to skip less important details and explaining poorly understood concepts. At the end of the session there is time to reflect on the use of Puppet and to discuss the experiences of participants and presenters.</p><p>
          After the session, you should:
          <ul>
            <li>
              understand the motivation for automatic configuration management </li><li>
understand the basic Puppet concepts </li><li>
be able to provision simple servers </li><li>
            have heard some experience reports on automatic configuration management </li></ul>
</p><p>           
          Participants are expected to bring their own laptop that either has VMWare or virtual box installed, and enough free resources to run a virtual machine with minimal 512MB memory (or better: 1GB) and a few gigabytes of free diskspace. If possible, download and install the learning environment beforehand from <a href="http://info.puppetlabs.com/download-learning-puppet-VM.html">the puppet website</a> </p>
           <p></p>
          (<a href="http://propile.xpday.net/sessions/52/public">session website @xp-days
            </a> )
        </div>
        <p></p>
      </li>
      
      <li> <b>The Return of the Werewolves</b>, session organized
        at XP-days, together with Johan Peeters and Peter Doomen (<a href="javascript:selectService('xpdays2012werewolves');">more
          information</a>), 29-30/11/2012
        <div class="servicedetails" id="xpdays2012werewolves">
          <p><b>Description</b></p>
          <p>In this side-track, we are looking for the programming practices that can produce the most business value. A short introductory session is followed by a technical side track where you will implement a computer version of the well-known party game ?werewolves?. But mind you, change will happen!</p>
            
          <p><b>
            Goal of the session:</b>
            
            <ul>
              <li>Develop a real application.</li>
              <li>Demonstrate that good practices can make a difference. </li>
              <li>Show that we are actually capable of changing direction if needed.</li>
            </ul>
          </p>
          <p><b>
            Intended audience:</b>
            <ul>
              <li>
            Every developer who wants to demonstrate the agility of his programming toolbox. This could be "I want to prove that my programming language is more agile than others so that I can become the next guru and take over the world", or, "TDD is the best thing since sliced bread, so, I don't write one line of code unless I have a failing test"</li>
              <li>
                
            Every developer who wants to learn agile programming practices from his peers </li>
              <li>Every developer who wants to leave the XP days with a real, demo-able result (see Personas)</li>
            </ul>
          </p>
            <p>We'll form small groups (1,2,3 persons) around programming languages, we?ll get some customer input and then we?ll start coding! Or write tests, whatever you believe is the most effective?
Participants can decide when to continue working on the case by themselves. At regular moments, a new/changed user story will be made available. Important metrics we want to gather during the competition are, on the one hand, the total business value produced, and, on the other, the ratio of business value to time spent.</p><p>
After day 1, a first demo to the product owner will be given by all participating groups (with clarification of user stories if needed)</p><p>
After day 2, all teams give their final demo to the product owner and a winner will be announced? There will be an opportunity to discuss the effectiveness of the techniques employed by the teams.</p><p>
          More information on the game of werewolf (partially in Dutch): <a href="http://www.aboriginemundi.com/index.php/tag/weerwolf/">http://www.aboriginemundi.com/index.php/tag/weerwolf/</a></p><p>
Intended audience and prerequisites:
Developers, so coding skills needed. You also need a computer with your favorite developer toolset and possibly some reference material like handbooks</p><p>
Benefits for participants and presenter(s):
          <ul>
            <li>For presenters: being able to play the game :-) </li>
            <li>For participants: the same, plus being proud of having made the best implementation in a very short time?</li>
          </ul>
          
          </p>
           <p></p>
          (<a href="http://propile.xpday.net/sessions/91/public">session website @xp-days
            </a> )
        </div>
        <p></p>
      </li>
      
      <li> <b>Automating server installation and
          maintenance with Puppet</b>, hands-on session presented at BelgAF, in collaboration
        with Johan Peeters (<a href="javascript:selectService('PuppetBelgAF2012');">more
          information</a>), 17/10/2012
        <div class="servicedetails" id="PuppetBelgAF2012">
          <p><b>Description</b></p>
          <p>In this session we did a tryout with the BelgAF audience of a
            session that will take place on XPdays, November 2012, directly
            followed by discussion on the architectural importance of tools such as Puppet.</p>
          <p> Details session description (see
            http://propile.xpday.net/sessions/52/public) </p>
          <p> Before we used Puppet, server infrastructure was a source of
            frustration. It was something we did not have under control. Here
            are 2 examples from our experience: </p>
          <ul>
            <li>In application development, you invariably need a server to test
              on while developing, one for integration testing, one for
              acceptance testing, and then of course, the production servers.
              Would it not be good, if their setup was repeatable and automated,
              and you could rely on all those servers having exactly the same
              configuration? This is what Puppet enables.</li>
            <li>If there are several development groups, they all need CI tools
              such as build servers and code repositories. Rather than setting
              those up by hand, you could be writing Puppet scripts to provision
              them. This has the added benefit of simplifying recovery from
              failure: when a server fails, you simply provision another one
              with Puppet. </li>
          </ul>
          <p></p>
          <p>Puppet is an open source configuration management tool that uses a
            declarative configuration language giving developers and system
            administrators control over complex server configurations. Puppet is
            designed to manage the configuration of Unix and Microsoft Windows
            systems. Puppet competes in the automated configuration management
            niche with other tools such as Chef and CFEngine. </p>
          <p>In this session, we want you to get a flavor of Puppet's
            possibilities and limitations by working through some hands-on
            exercises. At the end of the session, we share experiences and
            debate where the use of Puppet is appropriate. </p>
          <p>The session is based on the tutorial and learning VM provided by
            Puppet Labs. We coach participants to work through the tutorial and
            provide help with the most relevant exercises. While the tutorial
            and learning VM are great for self-study, we believe we can
            accelerate participants? learning by focusing on salient points,
            encouraging to skip less important details and explaining poorly
            understood concepts. At the end of the session there is time to
            reflect on the use of Puppet and to discuss the experiences of
            participants and presenters. </p>
          <p>After the session, you should: </p>
          <ul>
            <li>understand the motivation for automatic configuration management</li>
            <li> understand the basic Puppet concepts + be able to provision
              simple servers</li>
            <li> have heard some experience reports on automatic configuration
              management</li>
          </ul>
          <p></p>
          <p>Some points of the conclusion during the discussion after the
            session: </p>
          <ul>
            <li>Puppet fits in the broader movement that pushes for fast release
              cycles and continues deployment; this should be emphasized as it
              clearly has some architectural impact.</li>
            <li>For a lot of people configuration management is at the periphery
              of software development; yet setting up and maintaining a good
              uniform infrastructure is a often a serious architectural
              challenge. Solutions like Puppet provide a basic architecture to
              do this and its basics should be known by architects.</li>
            <li>There was an interesting question whether Puppet provides most
              of its added value to set up infrastructure or that its main
              merits are also within the area of application deployment and
              maintenance.</li>
          </ul>
          <p></p>
          (<a href="http://www.belgaf.be/session/automating-server-installation-and-maintenance-puppet">BelgAF
            website</a>) </div>
        <p></p>
      </li>
      <li> <b>Using A3 architectural overviews</b>, session presented
        at BelgAF, by Alexander (<a href="javascript:selectService('A3belgaf2012');">more
          information</a>), 11/01/2012
        <div class="servicedetails" id="A3belgaf2012">
          <p><b>Description</b></p>
          <p>An open discussion session on the idea of a more agile way of
          presenting architecture on an A3 size paper, inspired by A3 system
            thinking. </p>
           <p></p>
          (<a href="http://www.belgaf.be/content/a3-architecture-overviews">BelgAF
            website</a>, <a href="https://www.dropbox.com/s/tgmygm84smy5ecf/A3%20Architecture%20Overviews%20-%20Alexander%20Helleboogh.pdf">pdf</a>)
        </div>
        <p></p>
      </li>
      <li> <b>Quality requirements in agile development</b>, session presented at XP Days Benelux 2011, in collaboration with Johan Peeters (<a
          href="javascript:selectService('xpdays2011');">more
          information</a>), 2/12/2011
        <div class="servicedetails" id="xpdays2011">
          <p><b>Abstract</b></p>
          <p> The success of software is not only in the functions it supports,
            but also in the qualities it exhibits (like security, performance,
            usability and maintainability). In this session, we want to
            investigate how these qualities can be addressed, particularly how
            they can be described, planned and tracked within an agile work
            flow. Quality requirements are also often referred to as
            â??non-functionalâ?? requirements.</p>
          <p>In this session, participants will gain hands-on experience with
            several techniques (like acceptance criteria on user stories,
            dedicated user stories, adjustments on the definition of â??doneâ??,
            abuser stories) for explicitly managing quality requirements in an
            agile project. Participants will be divided in small groups and
            choose one or two qualities to experiment with within the context of
            an example system. Each group will experiment with one or more
            techniques and share experiences through review of each othersâ??
            results and plenary discussion.</p>
          (<a href="http://www.xpday.be/Xpday2011/FrontPage.html">XP Days
            Benelux 2011 website</a>, <a href="http://www.xpday.be/Xpday2011/sessions/Quality%20requirements%20in%20agile%20development.html">session
            homepage</a>) </div>
        <p></p>
      </li>
      <li> <b>Wat werkt NIET in architectuur?</b>, session
        presented at BelgAF by Nelis and Bavo De Ridder (<a href="javascript:selectService('werktNietBelgaf2011');">more
          information</a>), 6/10/2011
        <div class="servicedetails" id="werktNietBelgaf2011">
          <p>Architecture pitfalls presented:</p>
          <p>
          	<ul>
          		<li>Graphical programming languages (Johan Peeters)</li>
                <li>Segmentation in architecture (Bavo De Ridder)</li>
	          	<li>A document-centric approach to architecture (Nelis Boucké)</li>
          	</ul>
          </p>
          (<a href="http://www.belgaf.be/content/wat-werkt-niet-architectuur">BelgAF
            session website</a>) </div>
        <p></p>
      </li>
      <li> <b>Evoline: an architectural approach for
          online evolution of software product lines</b>, session presented at High-Tech
        Product Lines (<a href="javascript:selectService('htpl');">more
          information</a>), 28/9/2011
        <div class="servicedetails" id="htpl">
          <p><b>Abstract</b></p>
          <p> Software product lines evolve. As a consequence, deployed products
            of the product line need to be updated and maintained, which is
            often a nightmare due to custom configurations, patches, lack of
            documentation. In this session, we present Evoline, an architectural
            approach for evolution in software product lines. Evoline supports
            updating a software product line by extracting and visualizing
            architectural information. We evaluated Evoline at Egemin, a leading
            provider of warehouse automation solutions, and show empirical
            evidence for its benefits and recommendations.</p>
          (<a href="http://www.bits-chips.nl/events/eventshpl/programme.html">High-Tech
            Product Lines 2011 website</a>) </div>
        <p></p>
      </li>
      <li> <b>Quality requirements in agile
          software development</b>, hands-on session organized at BelgAF, in collaboration with
        Johan Peeters (<a href="javascript:selectService('qabelgaf2011');">more
          information</a>), 5/5/2011
        <div class="servicedetails" id="qabelgaf2011">
          <p> <b>Description</b> </p>
          <p>Tryout of the session on XP-days 2011. </p>
          <p></p>
          (<a href="http://www.belgaf.be/content/quality-requirements-agile-software-development-0">BelgAF
            website</a>, <a href="https://www.dropbox.com/s/r5fzrckq8aq7q1e/BelgAF%20NFV%20in%20agile%20-%20Intro.pdf">presentation</a>,
          <a href="https://www.dropbox.com/s/izm3wjowef86o7y/case%20study%20for%20quality%20requirements.pdf">case
            study</a>) </div>
        <p></p>
      </li>
      <li> <b>Quality requirements in agile software development</b>, hands-on session organized at Agile Open 2011, in
        collaboration with Johan Peeters (<a href="javascript:selectService('agileopen');">more
          information</a>), 20/4/2011
        <div class="servicedetails" id="agileopen">
          <p> </p>
          (<a href="http://www.agileopen.net/">Agile Open website</a>) </div>
        <p></p>
      </li>
      <li> <b>Inside experiences on bootstrapping a
          startup</b>, presentation at DistriNet/KULeuven, 7/4/2011
        <p></p>
      </li>
      <li> <b>How to evaluate/measure a software
          architecture?</b>, session presented at iLean (<a href="javascript:selectService('ilean');">more
          information</a>), 23/3/2011
        <div class="servicedetails" id="ilean">
          
          <p><b>Learning Objectives:</b></p>
          After this session, participants will have a better understanding of:
          <ul>
            <li>What quality attributes such as reliability, performance,
              modifiability, etc. mean, and how to specify them in a measurable
              way. </li>
            <li>How quality attributes affect a software architecture</li>
            <li>Why architecture analysis is important</li>
            <li>How QAW and ATAM are performed</li>
            <li>Do's and don'ts when performing architecture evaluations</li>
          </ul>
          <p><b>Abstract</b></p>
          <p>Most complex software systems should be modifiable, performant,
            secure, flexible, portable, reliable, etc. But how do you know
            whether the software architecture for a system will achieve these
            goals (or not) without having to build the system first? Is there a
            structured way to analyze/measure a software architecture? </p>
          <p> In this interactive session, we discuss to which extent
            architectures can be evaluated and we highlight approaches that
            support architecture evaluation in a systematic way, including the
            Quality Attribute Workshop (QAW) and the Architecture Tradeoff
            Analysis Method (ATAM). The QAW is a lightweight,
            stakeholder-oriented workshop aimed at prioritizing and specifying
            architecture qualities in a measurable way. The ATAM is an
            established method for systematically evaluating software
            architectures for fitness of purpose. The ATAM exposes architectural
            risks that potentially inhibit the achievement of quality goals and
            the system's business/mission goals. Empirical measurements show
            that a structured architecture evaluation saves about 10% of the
            total cost of a software project. </p>
          (<a href="http://www.ilean.be/course/measurearch_20110323">iLean
            website</a>) </div>
        <p></p>
      </li>
      <li> <b>Security as an architectural quality</b>, session presented
        at SecAppDev (<a href="javascript:selectService('secappdev');">more
          information</a>), 1/3/2011
        <div class="servicedetails" id="secappdev">
          <p><b>Learning objectives:</b></p>
          <ul>
            <li>Understand security in the context of the ISO 42010 standard on
              architecture descriptions.</li>
            <li>Basic understanding of architecture views, viewpoints and how to
              apply them for security.</li>
            <li>Gain insight into specifying quality scenarios for security.</li>
            <li>Learn to make architecture tradeoffs using utility trees and use
              architecture evaluations (ATAM).</li>
          </ul>
          <p><b>Overview:</b></p>
          <p> In this talk, we highlight security from a software architecture
            perspective. A software architect considers security in relation to
            many other qualities, such as performance, availability,
            extensibility, time-to-market,... We discuss the implications of
            considering security as one architectural quality amongst many
            others, and give an overview of how typical architectural techniques
            and practices, such as quality attribute scenarios, utility trees,
            principles, viewpoints and architectural patterns, can be applied to
            security. </p>
          (<a href="http://www.secappdev.org/">SecAppDev website</a>) </div>
        <p></p>
      </li>
    </ul>
    
  </body>
</html>
