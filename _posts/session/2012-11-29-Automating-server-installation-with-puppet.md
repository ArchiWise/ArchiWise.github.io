---
layout: page
title: Automating server installation and maintenance with Puppet
categories: session
excerpt: Hands-on session presented at XP-days, together with Johan Peeters, 29/11/2012
---

####Description

Before we used Puppet, server infrastructure was a source of frustration. It was something we did not have under control.
Here are 2 examples from our experience: 
- In application development, you invariably need a server to test on while developing, one for integration testing, one for acceptance testing, and then of course, the production servers. Would it not be good, if their setup was repeatable and automated, and you could rely on all those servers having exactly the same configuration? This is what Puppet enables.
- If there are several development groups, they all need CI tools such as build servers and code repositories. Rather than setting those up by hand, you could be writing Puppet scripts to provision them. This has the added benefit of simplifying recovery from failure: when a server fails, you simply provision another one with Puppet. 
 
Puppet is an open source configuration management tool that uses a declarative configuration language giving developers and system administrators control over complex server configurations. Puppet is designed to manage the configuration of Unix and Microsoft Windows systems. Puppet competes in the automated configuration management niche with other tools such as Chef and CFEngine.

In this session, we want you to get a flavor of Puppet's possibilities and limitations by working through some hands-on exercises. At the end of the session, we share experiences and debate where the use of Puppet is appropriate.

The session is based on the tutorial and learning VM provided by Puppet Labs. We coach participants to work through the tutorial and provide help with the most relevant exercises. While the tutorial and learning VM are great for self-study, we believe we can accelerate participants? learning by focusing on salient points, encouraging to skip less important details and explaining poorly understood concepts. At the end of the session there is time to reflect on the use of Puppet and to discuss the experiences of participants and presenters.

After the session, you should:
- understand the motivation for automatic configuration management
- understand the basic Puppet concepts
- be able to provision simple servers 
- have heard some experience reports on automatic configuration management
- Participants are expected to bring their own laptop that either has VMWare or virtual box installed, and enough free resources to run a virtual machine with minimal 512MB memory (or better: 1GB) and a few gigabytes of free diskspace. If possible, download and install the learning environment beforehand from [the puppet website](http://info.puppetlabs.com/download-learning-puppet-VM.html)

####More information
- [session website @xp-days](http://www.xpday.net/Xpday2012/public_program/sessions/52/public.html)