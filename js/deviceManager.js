$(function() {
    adjustStyle($(this).width());
    $(window).resize(function() {
        adjustStyle($(this).width());
    });
});

function adjustStyle(width) {
    width = parseInt(width);
    if (width < 701) {
        //$('#stylesheet').attr('href', 'css/mobile.css');
		buildMobileLayout();
    } else if ((width >= 701) && (width < 900)) {
        //$('#stylesheet').attr('href', 'css/tablet.css');
		buildTabletLayout();
    } else {
       //$('#stylesheet').attr('href', 'css/computer.css');
	   buildComputerLayout();
    }
}

function buildComputerLayout() {
	$('#world').css('display', 'block');
}

function buildTabletLayout() {
	$('#world').css('display', 'none');
}

function buildMobileLayout() {
	$('#world').css('display', 'none');
}