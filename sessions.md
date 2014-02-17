---
layout: page
title: Sessions
---

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
