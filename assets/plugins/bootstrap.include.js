



    $("[rel=tooltip]").tooltip();

    $("[rel=popover]").popover();

    $('#myModal').modal('hide');

    function goBack() {
        window.history.back();
    }
	$('.carousel').carousel();
        
	$(".alert").alert();
	
	$('.collapse').on('shown.bs.collapse', function(){
		$(this).parent().find(".glyphicon-chevron-down").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
	}).on('hidden.bs.collapse', function(){
		$(this).parent().find(".glyphicon-chevron-up").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
	});


$('#demo1').videoUI({
  'autoHide':false,
  'volumeMedia': 1
});

