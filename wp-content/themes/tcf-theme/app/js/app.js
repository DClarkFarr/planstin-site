$ = jQuery.noConflict();

function appinit() {
	var $root_ = $('body');
	var $app_ = $('#appcontent'); // App Content
	var $nav_ = 'nav'; // Link Parent Selector
	var siteURL = window.location.origin;
	var $internalLinks = "a[href^='" + siteURL + "'], a[href^='/']"; 
	
	/* DOCUMENT READY SCRIPTS HERE */
}

function append() {}
$(function() {
	var $root_ = $('body');
	var $app_ = $('#appcontent'); // App Content
	var $nav_ = 'nav'; // Link Parent Selector
	var siteURL = window.location.origin;
	var $internalLinks = "a[href^='" + siteURL + "']:not(a[href^='" + siteURL + "/wp']), a[href^='/']:not(a[href^='/wp'])";
	window.addEventListener('popstate', function(e) {
		checkURL();
	});
	$(document).on('click', $internalLinks, function(e) {
		var $this = $(e.currentTarget);
		if ((!$this.attr('target') || $this.attr('href')) && !$this.hasClass('no-ajax')) {
			e.preventDefault();
			history.pushState(null, null, $this.attr('href'));
			//window.location.hash = $this.attr('href');
			checkURL();
		}
	});
	$(document).on('click', 'a[target="_blank"]', function(e) {
		e.preventDefault();
		$this = $(e.currentTarget);
		window.open($this.attr('href'));
	});
	$(document).on('click', $nav_ + ' a[target="_top"]', function(e) {
		e.preventDefault();
		$this = $(e.currentTarget);
		window.location = ($this.attr('href'));
	});
	$(document).on('click', $nav_ + ' a[href="#"]', function(e) {
		e.preventDefault();
	});

	function checkURL() {
		var url = window.location.pathname;
		var chkurl = $('#urlhelp').attr('data-url');
		var container = $app_;
		if (url != chkurl) {
			loadURL(url, container);
		} else {
			var $this = $($nav_ + ' > ul > li:first-child > a[href!="#"]');
		}
	}

	function loadURL(url, container) {
		$.ajax({
			type: "POST",
			data: {
				posty: 1
			},
			url: url,
			dataType: 'json',
			cache: false,
			beforeSend: function() {
				$('#appcontent').html('<center><h1 class="bigpad"><i class="fa fa-cog fa-spin"></i> Loading...</h1></center>');
				$('#appcontent').animate({
					scrollTop: 0
				}, "fast");
			},
			success: function(data) {
				setTimeout(function() {
					$('#urlhelp').attr('data-url', window.location.pathname);
					$('#appcontent').css({
						opacity: '0.0'
					}).html(data.article).animate({
						opacity: '1.0'
					}, 500);
					document.title = data.title;
					appinit();
				}, 200);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				container.html('<h4 style="margin-top:10px; display:block; text-align:left"><i class="fa fa-warning txt-color-orangeDark"></i> Error 404! Page not found.</h4>');
			},
			async: false
		});
	}
	appinit();
});