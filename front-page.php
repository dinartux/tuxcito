<?php get_header() ?>
	<header class="black-bg px-6 py-9 md:py-3 fancy-font big-section">
		<h1 class="text-white text-7xl text-bold py-8 lg:mt-52 md:mt-30">Tony Dinarte</h1>
		<h2 id="about-mobile" class="text-white text-5xl px-9 text-bold">Software Engineer, Consultant and Trainer.</h2>
	</header>
	<main class="gray-bg px-6 py-9 middle-section">
		<h2 class="text-5xl text-black fancy-font py-8">A bit about me...</h2>
		<p class="text-2xl px-9 nunito">I'm a PHP Software Engineer with 7 years of experience based in Costa Rica. I'm currently working with the <a href="https://hostpapa.com">HostPapa</a> Development team to develop, scale, and architect their existing platform and what will be their next business platform.</p>
		<p class="text-2xl px-9 nunito">I love software development in general, but you will find me mainly working with PHP and JavaScript in multiple presentations: Silverstripe, WordPress, Drupal, Laravel, Vanilla JS, Vue, Angular, jQuery, etc.</p>
		<p class="text-2xl px-9 nunito">I do like performant sites, so I put an extra effort into every project I have the lead on to follow good performance patterns. I'm also passionate about scalability and software architecture as a whole, so here in this blog you will find articles about my experience working as a software engineer doing what I love to do.</p>
        <div class="text-2xl px-9 nunito mt-8">
            <li><a href="https://twitter.com/dinartux" target="_blank" class="text-blue-700">My twitter profile</a></li>
            <li><a href="https://github.com/dinartux" target="_blank" class="text-blue-700">My GitHub profile</a></li>
            <li><a href="https://www.linkedin.com/in/dinartux/" target="_blank" class="text-blue-700">My LinkedIn profile</a></li>
        </div>
	</main>
	<div class="black-bg px-6 py-9 middle-section">
		<h2 class="text-5xl text-white fancy-font py-8">Areas of Expertise</h2>
		<div class="div-bottom-border mb-4 nunito">
			<h4 class="text-2xl text-white px-9">PHP</h4>
			<p class="text-xl text-white px-9 mb-8">Over 6 years working with PHP as my main programming language. I'm in love with it since day 1, I've used all kind of Open source projects in the road.</p>
			<a class="text-bold mx-9 px-6 bg-white text-black py-5" href="<?php echo home_url('expertise/php')?>">Read more</a>
		</div>
		<div class="div-bottom-border  mb-4 nunito">
			<h4 class="text-2xl text-white px-9 pt-5">JavaScript</h4>
			<p class="text-xl text-white px-9 mb-8">Over 5 years working with JavaScript. Mainly focused on VanillaJS, Electron and Vue JS.</p>
			<a class="text-bold mx-9 px-6 bg-white text-black py-5" href="<?php echo home_url('expertise/javascript')?>">Read more</a>
		</div>
		<div class="div-bottom-border  mb-4 nunito">
			<h4 class="text-2xl text-white px-9 pt-5">TypeScript</h4>
			<p class="text-xl text-white px-9 mb-8">Over 3 years working with TypeScript and Angular.</p>
			<a class="text-bold mx-9 px-6 bg-white text-black py-5" href="<?php echo home_url('expertise/typescript')?>">Read more</a>
		</div>
	</div>
<?php get_footer() ?>
