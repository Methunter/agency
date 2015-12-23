// 	/*
// 	* @Author: m32sa
// 	* @Date:   2015-12-07 07:39:17
// 	* @Last Modified by:   m32sa
// 	* @Last Modified time: 2015-12-07 08:43:46
// 	*/
(function( $ ){

	var methods = {
		list_exp: function( actor , name , key  ){
			var result =  "<ul>" ;
			for (var i = actor.olgaVinichenko.theatre_expirience.length - 1; i >= 0; i--) {
				result += "<li id=" + key + "> " + actor.olgaVinichenko.theatre_expirience[i]  +  "</li>";
			}
			result += "</ul>";
			return result;
		},
		list_educ: function( actor , name , key ){
			var result =  "<ul>" ;

			for (var i = actor.olgaVinichenko.education.length - 1; i >= 0; i--) {
				result += "<li id=" + key + "> " + actor.olgaVinichenko.education[i]  +  "</li>";
			}
			result += "</ul>";
			return result;
		},
		enlight: function(){
			var pathname = window.location.pathname;
			var page = pathname.split(/[/ ]+/).pop();
			this.each(function (i,e) {
				var ne = e.toString(); //
				var item = ne.split("/").pop();
				console.log(this);
				if ( page == item) {
					$(this).attr("class","active");
				}
			})
		},
		age_reveal : function(){
			$('#age').html("");
			var get_current_age = function(date) {
				return new Date().getFullYear() - date;
			};
			$('#age').text("254")
		},
		show : function( ) { 
			console.log('I AM MATTER!!!!');
		},  
		getName : function(   url_to_file  ){
			var dynamicData = {};
		    // dynamicData["id"] = personID;
		    return $.ajax({
		    	url: url_to_file ,
		    	type: "get",
			    // data: dynamicData
			}).done(function(data) {
				console.log( "success"  );
			}).fail(function(data) {
				console.log( "error"  );
			}).always(function(data) {
				console.log( "complete"  );
			});
			
		},
		inject : function( that ){
			console.log(that);
			var $modal = $(this);

			console.log($modal);
			$.ajax({url:that})
			.done(function(resp){
				$modal.html(resp);
				console.log('Injected!');
			});
		},
		ofWidth : function (){
			var container = $(this);
			$( window ).resize(function() {
				console.log($( window ).width()/16 + "em" );
				container.html( "<div>" + $( window ).width()/16 + "em</div>" );
			});
		},
	}
		

	$.fn.matterO = function( method ) {

		if ( methods[method] ) {
		// console.log('The Matter is ' + methods[ method ]) ;
		// console.log(this.length ? 'The this is ' +  this.length + "\nAnd Also: " + $(this): 'The this is ' +  this ) ;
		// console.log(arguments.length ? 'The arguments is ' + arguments.length : 'The arguments is ' +  arguments ) ;
		return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
	} else if ( typeof method === 'object' || ! method ) {
		console.log('As a Matter of ' + methods[ method ] );
		return methods.init.apply( this, arguments );
	} else {
		$.error( 'Метод с именем ' +  method + ' не существует для jQuery.tooltip' );
	}    
};
})( jQuery );

/************************************************ Запасники ************************************************//*
$('ul#stage').html(""); //Note: Остаётся.

				$('ul#stage').append('<li id=' + key + '> Имя: ' + actor.olgaVinichenko.name + '</li>');
				$('ul#stage').append('<li id=' + key + '>Дата рождения : ' + actor.olgaVinichenko.B_date+ '</li>');
				$('ul#stage').append('<li id=' + key + '> Место рождения: ' + actor.olgaVinichenko.B_place+ '</li>');
				$('ul#stage').append('<li id=' + key + '> Образование: <ul>');
				for (var i = actor.olgaVinichenko.education.length - 1; i >= 0; i--) {
					$('ul#stage').append(actor.olgaVinichenko.education[i]  +  '</li>/<ul></li>');
				}
				$('ul#stage').append('<li id=' + key + '> Работы в театре: ' );
				for (var i =  actor.olgaVinichenko.theatre_expirience.length - 1; i >= 0; i--) {
					$('ul#stage').append( actor.olgaVinichenko.theatre_expirience[i]  +  '</li>/<ul></li>');
				}page layout backUp 

Некоторое время спустя...
$('#fun').matter('show');
/**************************** AJAX ****************************//*

  function getName(personid) {
    var dynamicData = {};
    dynamicData["id"] = personID;
    return $.ajax({
      url: "getName.php",
      type: "get",
      data: dynamicData
    });
  }

  getName("2342342").done(function(data) {
    // Updates the UI based the ajax result
    $(".person-name").text(data.name); 
  });




*/