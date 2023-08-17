$(document).ready(function(){

	var slides = 0;
	var mask = '';
	var file = '';
	var path = '../';
	var extension = '.jpg';

	// Figure out what html file is calling it
	if($( "#membersName" ).length)
	{
		if($('body').attr('class') === 'arabic') {
			
			slides = 27;
			mask = '9[9]';
			file = 'membersNameAR';
		} else { 
			
			slides = 47;
			mask = '9[9]';
			file = 'membersNameEN';
		}
	} else if ($( "#membersNumber" ).length)
	{
		slides =528;
		mask = '9[9][9]';
		file = 'membersNumber';
	}  else if ($( "#policyUpdate" ).length)
	{
		slides = 10;
		mask = '9[9]';
		file = 'policyUpdate';
	}

	if($("body").attr('class') === 'arabic')
	{
		path = '';
	}
	//////////////////////////////////////////

	var htmlString = '<div class="item active"><img src="' + path + 'images/' + file + '/' + '1' + extension + '" width="460" height="345"></div>';

	for(var i = 2; i <= slides; ++i)
	{
		htmlString += '<div class="item"><img src="' + path + 'images/' + file + '/' + i + extension + '" width="460" height="345"></div>'

	}
	$( "#carouselSlides" ).html( htmlString );

	$('.carousel').carousel({
	    interval: false
	});
	$('#slideText input').inputmask(mask,{ placeholder:'', oncomplete:function(result){updateCarousel(result.target.value);}});
	$('#slideText span').html('of ' + slides);

	updateCarousel(1);

	// This triggers after each slide change
	$('.carousel').on('slid.bs.carousel', function () {
	  var currentIndex = $('div.active').index() + 1;

	  // Now display this wherever you want
	  $('#slideText input').val(currentIndex);
	  carouselIndicators(currentIndex);

	});

	function updateCarousel(slide) {
		if(slide < 1)
		{
			slide = 1;
		} else if (slide > slides){
			slide = slides;
		}

		$('#slideText input').val(slide);
		$('#myCarousel').carousel(slide - 1);
		carouselIndicators(slide);
	}

	function carouselIndicators(slide)
	{
		var html = '';
		var indicators = Math.min(10, slides);
		var middle = Math.floor(indicators / 2);

		var left = Math.max(1, slide - middle);
		var right = Math.min(slides, slide + middle - 1);
		if(slides - slide < middle - 1)
		{
			left -= middle - 1 - (slides - slide);
		} else if (slide <= middle)
		{
			right += middle + 1 - slide;
		}

		for( ; left < slide; ++left)
		{
			html += '<li data-target="#myCarousel" data-slide-to="' + (left - 1) + '" >' + left + '</li>';
		}

		html += '<li data-target="#myCarousel" data-slide-to="' + (slide - 1) + '" class="active">' + slide + '</li>';

		for(++slide; slide <= right; ++slide)
		{
			html += '<li data-target="#myCarousel" data-slide-to="' + (slide - 1) + '" >' + slide + '</li>';
		}


		$( "#carouselIndicators" ).html(html);


	}
});
