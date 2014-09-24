/*$('#popup').modal('show').delay(500);*/

$(document).ready(function(){
   $("#focusInput").focus();
   $('.infinite-container').waypoint('infinite');
});

$('.autocomplete').typeahead({
    name: 'destinations',
    valueKey: 'city',
    remote: {
        url : '/ajax/autocomplete?q=%QUERY'
    },
    template: Handlebars.compile([
        '<span class="fa fa-map-marker fa-2x pull-left"></span>',
        '<p>{{city}}</p>',
        '<p class="text-muted"><small>{{region}}</small></p>'
    ].join(''))
});    
$('.autocomplete').on("typeahead:selected typeahead:autocompleted", function(e,datum) {
    $(hiddenid).val() = datum.id;
})

$('#nav-destination').affix({
  offset: {
    //top: $('#jumbotron').height() + $('nav').height()
    top: 360
  }
});

function beenThere(cityid)
{
  $.ajax({
    url: "/ajax/beenthere",
    type: "POST",
    data: { id : cityid },
    dataType: "json",
    success: function(data, textStatus, xhr) {
      $('#beenThere').html('<span class="fa fa-check"></span> Visited');
      $('#beenThere').removeClass("btn-primary");
      $('#beenThere').addClass("btn-success");
      console.log('Location Saved');
    },
    error: function(data, textStatus, xhr) {
      $('#beenThere').button("reset");
      console.log('Saving location failed');
    }    
  });
}

function follow(userid)
{
  $.ajax({
    url: "/ajax/follow",
    type: "POST",
    data: { id : userid },
    dataType: "json",
    success: function(data, textStatus, xhr) {
      $('.btn-follow').html('<span class="fa fa-check"></span> Following');
      $('.btn-follow').removeClass("btn-primary");
      $('.btn-follow').addClass("btn-success");
      console.log('Friendship Saved');
    },
    error: function(data, textStatus, xhr) {
      $('.btn-follow').button("reset");
      console.log('Saving friendship failed: ' + textStatus);
    }    
  });
}

$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});
