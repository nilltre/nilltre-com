<li><a href="/">Hem</a></li>
<!-- <li><a href="#/webshop">Webshop</a></li> -->
<!-- <li>
	<a href="#/tjanster">Tjänster</a>
	<ul class="sub-menu">
		<li><a href="/tjanster/installation">Installation</a></li>
		<li><a href="/tjanster/service">Service</a></li>
		<li><a href="/tjanster/projektering">Projektering</a></li>
		<li><a href="/tjanster/utredningar">Utredningar</a></li>
	</ul>
</li> -->
<!-- <li>
	<a href="#/om-foretaget">Om Företaget</a>
	<ul class="sub-menu">
		<li><a href="#/om-foretaget/information">Information</a></li>
		<li><a href="#/om-foretaget/sammarbetspartners">Sammarbetspartners</a></li>
		<li><a href="/om-foretaget/vara-kontor">Våra Kontor</a></li>
	</ul>
</li> -->
<!-- <li>
	<a href="#/medarbetare">Medarbetare</a>
	<ul class="sub-menu">
		<li><a href="#/medarbetare/helsingborg">Helsingborg</a></li>
		<li><a href="#/medarbetare/kinna">Kinna</a></li>
		<li><a href="#/medarbetare/stockholm">Stockholm</a></li>
	</ul> 
</li> -->
<!-- <li><a href="/kontakta">Kontakta</a></li> -->
@if(Auth::check())
	<li><a href="#/blog">Blog</a></li>
	<!-- 
	<li><a href="#/karriar">Karriär</a></li> -->
	<li><a href="/portal">Portal</a></li>
@endif