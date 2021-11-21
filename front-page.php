<?php get_header() ?>
	<header class="black-bg px-6 py-9 fancy-font big-section">
		<h1 class="text-white text-7xl text-bold py-8 mt-52">Tony Dinarte</h1>
		<h2 class="text-white text-5xl px-9 text-bold">Software Engineer <span class="px-3">+</span> Consultant <span class="px-3">+</span> Trainer.</h2>
	</header>
	<main class="gray-bg px-6 py-9 middle-section">
		<h2 class="text-5xl text-black fancy-font py-8">A bit about me...</h2>
		<p class="text-2xl px-9 nunito">I'm a Software Engineer based in Costa Rica. Currently committed with <a href="https://hostpapa.com">HostPapa</a> Development team to develop, scale and architect cool stuff.</p>
		<p class="text-2xl px-9 nunito">You will find me mainly working with PHP and JavaScrip in all their presentations: Silverstripe, WordPress, Vanilla JS, Angular, jQuery, etc.</p>
		<p class="text-2xl px-9 nunito">This site is my zen garden, I like performant good looking sites. I'm passionate about scalability and software architecture, So here you will find articles about my experience working as a developer.</p>
	</main>
	<div class="black-bg px-6 py-9 middle-section">
		<h2 class="text-5xl text-white fancy-font py-8">Areas of Expertise</h2>
		<div class="div-bottom-border mb-4 nunito">
			<h4 class="text-2xl text-white px-9">PHP</h4>
			<p class="text-xl text-white px-9 mb-8">Over 6 years working with PHP. I'm in love with it since day 1, I've used all kind of projects in the road.</p>
			<a class="text-bold mx-9 px-6 bg-white text-black py-5" href="<?php echo home_url('expertise/php')?>">Read more about my experience</a>
		</div>
		<div class="div-bottom-border  mb-4 nunito">
			<h4 class="text-2xl text-white px-9 pt-5">JavaScript</h4>
			<p class="text-xl text-white px-9 mb-8">Over 5 years working with JavaScript. Mainly focused on VanillaJS and Vue JS.</p>
			<a class="text-bold mx-9 px-6 bg-white text-black py-5" href="<?php echo home_url('expertise/javascript')?>">Read more about my experience</a>
		</div>
		<div class="div-bottom-border  mb-4 nunito">
			<h4 class="text-2xl text-white px-9 pt-5">TypeScript</h4>
			<p class="text-xl text-white px-9 mb-8">Over 3 years working with TypeScript and Angular.</p>
			<a class="text-bold mx-9 px-6 bg-white text-black py-5" href="<?php echo home_url('expertise/typescript')?>">Read more about my experience</a>
		</div>
	</div>
<?php get_footer() ?>
