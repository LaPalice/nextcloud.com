<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/contribute.css" rel="stylesheet">

<div class="background contribute-background">
	<div class="container">
		<div class="col-md-6 topheader">
			<h1><?php echo $l->t('Get involved!');?></h1>
			<h2><?php echo $l->t('Nextcloud is an <strong>open source project</strong> and an open company. That means it is <em>yours</em> to make a difference!');?></h2>
		</div>
	</div>
</div>

<section class="section--intro">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p class="section--paragraph"><?php echo $l->t('We invite you to join our <a class="hyperlink" href="https://github.com/nextcloud" target="_blank">development efforts on GitHub</a> and the conversations on <a class="hyperlink" href="https://help.nextcloud.com" target="_blank">our forums</a>. Interact with us on our <a class="hyperlink" href="/news">blogs and social media channels</a>, too!');?></p>
            <p class="section--paragraph"><?php echo $l->t('Do you want to get a certain improvement in Nextcloud? Did you find a problem? Do you want to help translate, promote or document Nextcloud?');?></p>
        </div>
	</div>
</div>
</section>
<section class="section--contribute">
<div class="container">

    <div class="row">
        <h1 class="section--heading-1 text-center"><?php echo $l->t('Become part of the Community.');?></h1>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/conference/grouppic2017-small.jpg" class="img-responsive" />
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/conference/grouppic2016_wee.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
            <p class="section--paragraph__tittle"><?php echo $l->t('Contribute to Nextcloud server or apps');?></p>
            <p class="section--paragraph"><?php echo $l->t('Learn about setting up a development environment or read our security guidelines, coding style and more!');?></p>
            <p class="section--paragraph"><?php echo $l->t('Improve the Nextcloud Server:');?> <a class="hyperlink"  href="<?php echo $DOCUMENTATION_DEVELOPER; ?>core"><?php echo $l->t('server development documentation');?></a>, <a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>general"><?php echo $l->t('general guidelines and setup');?></a></p>
            <p class="section--paragraph"><?php echo $l->t('Get a bug fixed:');?> <a class="hyperlink"  href="<?php echo $DOCUMENTATION_DEVELOPER; ?>bugtracker"><?php echo $l->t('bugtracker documentation');?></a></li>
            <p class="section--paragraph"><?php echo $l->t('Learn to write Nextcloud code. (Try your hands on a <a class="hyperlink"  href="https://github.com/nextcloud/server/labels/good%20first%20issue" target="_blank">good first issue</a> or get started with <a class="hyperlink" href="https://nextcloud.com/blog/get-involved-in-nextcloud-by-reviewing-pulls/">reviewing pull requests</a>)');?></li>
            <p class="section--paragraph"><a class="hyperlink" href="https://transifex.com/nextcloud"><?php echo $l->t('Help translate Nextcloud.');?></a></li>
            <p class="section--paragraph"><?php echo $l->t('Talk to us on our
            <a class="hyperlink" href="https://help.nextcloud.com" target="_blank">forum</a>! We look forward to your code and thoughts.');?></p>
            <a class="button button--blue" href="<?php echo home_url('developer') ?>"><?php echo $l->t('Learn more about writing Nextcloud apps');?></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/events/booth.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
            <p class="section--paragraph__tittle"><?php echo $l->t('Answer questions about Nextcloud use and development');?></p>
            <p class="section--paragraph"><?php echo $l->t('Help answer questions users and developers have about Nextcloud!');?></p>
            <p class="section--paragraph"><a class="" href="https://help.nextcloud.com"><?php echo $l->t('Join the Nextcloud forums');?></a></p>
            <p class="section--paragraph"><a class="hyperlink" href="<?php echo home_url('code-of-conduct') ?>"><?php echo $l->t('Please be considerate of our code of conduct</a>. We want to provide a positive and enjoyable environment for everybody.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/headers/atwork-small.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
            <p class="section--paragraph__tittle"><?php echo $l->t('Test Nextcloud');?></p>
            <p class="section--paragraph"><?php echo $l->t('Testing upcoming Nextcloud Server releases is the best way of making sure the new release can do what you need it
                to do. And of course, only if you report a problem to us we know about it and can fix it! If you have a bug to report,
                find the <a class="hyperlink" href="https://github.com/nextcloud/server/blob/master/.github/CONTRIBUTING.md">issue submission page</a>.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/headers/design-small.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
            <p class="section--paragraph__tittle"><?php echo $l->t('Design Nextcloud');?></p>
            <p class="section--paragraph"><?php echo $l->t('Help out with Nextcloud user interaction design or graphic design! Get involved on <a class="hyperlink"  href="design/">the design page</a>!');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/headers/ladies-that-foss.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
            <p class="section--paragraph__tittle"><?php echo $l->t('Support Nextcloud development with bounties');?></p>
            <p class="section--paragraph"><?php echo $l->t('Support Nextcloud development by offering some money on features you would like to have! <a class="hyperlink"  href="https://www.bountysource.com/teams/nextcloud" target="_blank">Check our Bountysource page</a>!');?>
            <p class="section--paragraph"><?php echo $l->t('Note that');?> <a class="hyperlink" href="<?php echo home_url('jobs') ?>"><?php echo $l->t('we are hiring</a>. We look especially for people who want to turn their passion into their job! When possible, we hire people from our active community base or from the wider open source community.');?></p>
        </div>
    </div>
</div>
</section>

<div class="calltoaction">
		<h1 class="section--heading-2 section--text--center"><?php echo $l->t('Let\'s make Nextcloud Rock!');?></h1>
		<p class="section--paragraph section--text--center"><?php echo $l->t('If you have any questions, <a class="hyperlink" href="https://help.nextcloud.com">our community is happy to help you</a>.');?></p>
</div>
