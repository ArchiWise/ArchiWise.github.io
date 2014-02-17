---
layout: page
title: Automating server installation and maintenance with Puppet
categories: session
excerpt: Hands-on session presented at BelgAF, together with Johan Peeters, 17/10/2012
---

####Description
In this session we did a tryout with the BelgAF audience of a
session that will take place on XPdays, November 2012, directly
followed by discussion on the architectural importance of tools such as Puppet.

Before we used Puppet, server infrastructure was a source of
frustration. It was something we did not have under control. Here
are 2 examples from our experience: 

- In application development, you invariably need a server to test
  on while developing, one for integration testing, one for
  acceptance testing, and then of course, the production servers.
  Would it not be good, if their setup was repeatable and automated,
  and you could rely on all those servers having exactly the same
  configuration? This is what Puppet enables.
- If there are several development groups, they all need CI tools
  such as build servers and code repositories. Rather than setting
  those up by hand, you could be writing Puppet scripts to provision
  them. This has the added benefit of simplifying recovery from
  failure: when a server fails, you simply provision another one
  with Puppet. 


Puppet is an open source configuration management tool that uses a
declarative configuration language giving developers and system
administrators control over complex server configurations. Puppet is
designed to manage the configuration of Unix and Microsoft Windows
systems. Puppet competes in the automated configuration management
niche with other tools such as Chef and CFEngine. 

In this session, we want you to get a flavor of Puppet's
possibilities and limitations by working through some hands-on
exercises. At the end of the session, we share experiences and
debate where the use of Puppet is appropriate. 

The session is based on the tutorial and learning VM provided by
Puppet Labs. We coach participants to work through the tutorial and
provide help with the most relevant exercises. While the tutorial
and learning VM are great for self-study, we believe we can
accelerate participants? learning by focusing on salient points,
encouraging to skip less important details and explaining poorly
understood concepts. At the end of the session there is time to
reflect on the use of Puppet and to discuss the experiences of
participants and presenters. 

After the session, you should: 

- understand the motivation for automatic configuration management
- understand the basic Puppet concepts + be able to provision
  simple servers
- have heard some experience reports on automatic configuration
  management


Some points of the conclusion during the discussion after the
session: 

- Puppet fits in the broader movement that pushes for fast release
  cycles and continues deployment; this should be emphasized as it
  clearly has some architectural impact.
- For a lot of people configuration management is at the periphery
  of software development; yet setting up and maintaining a good
  uniform infrastructure is a often a serious architectural
  challenge. Solutions like Puppet provide a basic architecture to
  do this and its basics should be known by architects.
- There was an interesting question whether Puppet provides most
  of its added value to set up infrastructure or that its main
  merits are also within the area of application deployment and
  maintenance.
          
          
      
      