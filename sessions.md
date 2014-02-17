---
layout: page
title: Sessions
---


At ArchiWise, we are passionate about architecture. We engage in several architecture-related initiatives, including:
- [<b>BelgAF</b>](http://www.belgaf.be) (<b>Bel</b>gian <b>A</b>rchitecture <b>F</b>orum). We co-founded BelgAF, a non-profit organisation that enables IT architects to share knowledge and experiences.
- [<b>Softwarewolves</b>](http://www.softwarewolves.net). Softwarewolves is engaging one-day coding contest for developers that combines both entertainment and learning. Softwarewolves is a joint initiative with Johan Peeters.

We regularly organize sessions at conferences on architecture-related topics:

<ul>
	{% for post in site.posts %}
  		{% if post.categories contains 'session' %} 
    		<li>
      			<a href="{{ post.url }}">{{ post.title }}</a>      
      			<p>{{ post.excerpt }}</p>
		    </li>
		{% endif %}
  	{% endfor %}
</ul>
