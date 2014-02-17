<h2>Services</h2>
<script type="text/javascript" language="JavaScript"><!--

function selectService(servicename){
	if(servicename.length < 1) { return; }

	var services = new Array();
	services[0] = 'audit';
	services[1] = 'productline';
	services[2] = "automation";
	services[3] = "training";

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

<p>Many organizations develop software and struggle with (1) <b>agility</b> to respond to new business opportunities and get new/updated software systems into the market as fast as possible, and (2) at the same time delivering systems with predictable end-to-end <b>quality</b>.</p>
<p>
<span class="archiwise">archi<b>wise</b></span> provides the following services:
</p>

<table>
<tr><td><a href="javascript:selectService('audit');"><img class="serviceicon" alt="Audit icon" src="audit.png"></a></td><td><a href="javascript:selectService('audit');"><br><span class="servicetitle">Architecture audit</span></a><div class="servicedetails" id="audit"> Do you need an external expert opinion on a major software overhaul? Do you need to identify the key challenges for your next generation software? Do you face quality issues with the software you develop? <br>
<br>

<span class="archiwise">archi<b>wise</b></span> offers the following options to evaluate your software architecture:
<ul>
<li><b>Quick Scan</b>: based on a short and to-the-point inspection, <span class="archiwise">archi<b>wise</b></span> provides you with a crisp overview of concrete actions to boost the agility and end-to-end quality of your software.</li>
<li><b>ATAM</b> (Architecture Trade-off Analysis Method): <span class="archiwise">archi<b>wise</b></span> offers an in-depth architecture evaluation to safeguard important qualities and to mitigate risks. A structured architectural evaluation saves more than 10% of the <i>total</i> project cost by identifying risks early in development when they are less expensive to fix.</li>
</ul></div>
</td></tr>

<tr><td><a href="javascript:selectService('productline');"><img class="serviceicon" alt="productline icon" src="productline.png"></a></td><td><br><a href="javascript:selectService('productline');"><span class="servicetitle">Product line integration</span></a><div class="servicedetails" id="productline">Do you develop multiple software products? Do you have a strategy to fully exploit commonalities shared by your software products?<br>
<br>

Similar to mechanical assembly lines, software product lines enable massive improvements in cost and productivity. <span class="archiwise">archi<b>wise</b></span> can help you to initiate or improve a software product line:
<ul><li><b>Assessing your product line maturity</b>
<br>Based on an analysis, <span class="archiwise">archi<b>wise</b></span> provides you with a crisp overview of the product line potential of your organization.
<li><b>Auditing and improving your product-line architecture</b>
<br><span class="archiwise">archi<b>wise</b></span> can help you to evaluate the risks and trade-offs of your product line architecture.</li>
<li><b>Adopting product-line best practices</b>
<br><span class="archiwise">archi<b>wise</b></span> can help you to adopt and improve your product line best practices, e.g. the 2 life cycle approach, asset tracking, etc.</li>
</ul></div>
</td></tr>



<tr><td><a href="javascript:selectService('automation');"><img class="serviceicon" alt="Automation icon" src="automation.png"></a></td><td><br><a href="javascript:selectService('automation');"><span class="servicetitle">Automated architecture reconstruction</span></a><div class="servicedetails" id="automation">Is the structure of your code impossible to understand? Are you struggling to keep architecture and implementation in sync? Does updating your systems give you headaches? <br>
<br>
By using a combination of automated architecture reconstruction and automated analysis on the actual software, <span class="archiwise">archi<b>wise</b></span> can help you to detect and correct problems more quickly and reliably:
<ul><li><b>Quality assurance</b>
<br>Automated monitoring of key architectural qualities increases development speed and ensures the delivery of quality software. Our approach has shown an increase in deployment speed with 35% while reducing inconsistencies with 50%.
<li><b>Legacy control</b>
<br><span class="archiwise">archi<b>wise</b></span> can help you regain control over legacy systems by the automated extraction of architectural information.</li></ul>
</div>
</td></tr>

<tr><td><a href="javascript:selectService('training');"><img class="serviceicon" alt="Consulting/Training icon" src="training.png"></a></td><td><br><a href="javascript:selectService('training');"><span class="servicetitle">Vendor-neutral advice & training</span></a><div class="servicedetails" id="training">Do you need expert advice of a vendor-independent partner to assist you in strategic ICT projects? <span class="archiwise">archi<b>wise</b></span> can provide objective and independent advice on which solutions and technologies are best suited to support your business needs and fit into your technical context.

<p>Do you want to know how to leverage on state-of-the-art architecture topics such as the ISO 42010 standard on architecture descriptions? <span class="archiwise">archi<b>wise</b></span> has experience with giving training on a variety of architecture-related topics. Moreover, we are amongst the first to pick up new trends on software architecture due to our active participation in both academic and industrial communities.</p>
</div>
</td></tr>
</table>
<!--</div>

<div id="quickscan" class="contentdetail">
<h2>Quickscan</h2>

<p>Based on a snappy inspection, archiwise provides you with a crisp overview of concrete actions to boost the agility and end-to-end quality of your software development.</p>
</div>

<div id="audit" class="contentdetail">
<h2>Architecture Audit</h2> 
<p>Do you need an external expert opinion on a major software overhaul? Do you need to identify the key challenges for a next generation of the software? Do you have a lot of quality issues with the software you develop?</p>
<p>Archiwise can evaluate your software architecture to safeguard important qualities and to mitigate risks. A structured architectural evaluation saves more than 10% of the total project cost [1] by identifying risks early in development when they're less expensive to fix. Our staff is experienced and certified in performing architecture evaluations using ATAM [2].</p>
</div>

<div id="automation" class="contentdetail">
<h2>quality automation</h2>
<p>Is the structure of your code impossible to understand? Are you struggling to keep architecture and implementation in sync? Does updating your systems give you headaches?</p>
<p>
Using a combination of automated architectural reconstruction and analysis on the actual software, archiwise can help you to detect and correct problems more quickly and reliably:
<ul><li><b>Quality assurance</b> 
<p>automated monitoring of key architectural qualities increases development speed and ensures the delivery of quality software. Our approach has shown an increase in deployment speed with 35% while reducing inconsistencies with 50%.</p>
<li><b>Legacy control</b> 
<p>regain control over legacy systems by automated reconstruction of architectural information.</p></li></ul>
		
</p>
</div>

<div id="training" class="contentdetail">
<h2>Vendor-neutral advice & training</h2> 
<p>Do you need an independent partner to help you in strategic ICT projects? Please contact us to discuss your needs.</p></li>



<p>We have experience with projects in automation, logistics, e-health, traffic and smart grids. We're definitely interested and willing to explore other domains/technologies: domains often face similar challenges which enable us to efficiently acquire expertise and transfer our knowledge.</p>

[1] Maranzano, J.F.; Rozsypal, S.A.; Zimmerman, G.H.; Warnken, G.W.; Wirth, P.E.; Weiss, D.M., "Architecture reviews: practice and experience," IEEE Software, vol.22, no.2
[2] Clements, P.; Kazman, R. & Klein, M. "Evaluating Software Architectures: Methods and Case Studies", Addison Wesley Publishing Comp., 2002
-->


