---
layout: page
title: Sessions
---
###Sessions
In addition to our consulting activities, we regularly organize sessions at various events on architecture-related topics:

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
