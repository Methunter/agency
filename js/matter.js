// 	/*
// 	* @Author: m32sa
// 	* @Date:   2015-12-07 07:39:17
// 	* @Last Modified by:   m32sa
// 	* @Last Modified time: 2015-12-07 08:43:46
// 	*/


// 	(function( $ ){
// 		'use strict';
// 		var methods = {
// 			init: function( options ) {

// 			},
// 			enlight: function(){
// 				$(this).each(function () {if ($("a").href == $.trim(location.href).last()) $this.attr({
// 					id: 'current'});
// 				console.log(location.href);
// 			});
// 			},
// 			getActors:  function(){

// 				$.getJSON( "http://master.m32sa.com/json/actress_olga_vinichenko.json",
// 					function( resp ) {
// 						$this.html( 'Results: ' + resp.results.length );
// 						cinsole.console.log('ajax: ' + resp + $this + $(this));
// 					}
// 					);
// 			},
// 			// show : function( ) {
// 		 //  // ПОДХОД
// 			// },
// 		// 	hide : function( ) {
// 		//   // ПРАВИЛЬНЫЙ
// 		// },
// 		update : function( content ) {
// 			$(this).append(content )
// 		},

// 		wha : function() {
// 			if (typeof $(this)) {
// 				console.log(typeof this)
// 			} else{
// 				console.log('Ну хуй знает...');
// 			};
// 		},
// 		size : function(obj) {
// 			var size = 0, key;
// 			for (key in obj) {
// 				if  (obj.hasOwnProperty(key)) {
// 					size++;
// 					console.log(size);
// 				}else{
// 					console.log("no sizr );");
// 				}
// 			}
// 			return size;
// 		},
// 		matero : function() {
// 			console.log('I AM MATTER!!!!');
// 		}
// 	};

// 	$.fn.matter = function( method ) {
// 	 // логика вызова метода
// 	 if ( methods[method] ) {
// 	 	console.log('The Matter is ' + methods[ method ] );
// 	 	return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
// 	 } else if ( typeof method === 'object' || ! method ) {
// 	 	console.log('The Matter is ' + methods[ method ]);
// 	 	return methods.init.apply( this, arguments );
// 	 } else {
// 	 	$.error( 'Метод с именем ' +  method + ' не существует для jQuery.matter' );
// 	 }

// 	};
// 	$.matter("matero")
// })( jQuery );









(function( $ ){

	var methods = {
		init : function( options ) {

			return this.each(function(){
				$(window).bind('resize.matter', methods.reposition);
			});

		},
		destroy : function( ) {

			return this.each(function(){
				$(window).unbind('.matter');
			})

		},
		describe : function(){
			this.each(function(index, el) {
				console.log("El is : " + el + typeof($(this)));
				console.log("content: " + $(this)[0]);
				console.log($(this).length);
			});
		},
		enlight: function(){
			var pathname = window.location.pathname,
			page = pathname.split(/[/ ]+/).pop();
			this.each(function (i,e) {
				var ne = e.toString(); //
				var item = ne.split("/").pop();
				if ( page == item) {
					$(this).attr("id","current");
				}
		});
		},
		// reposition : function( ) { 
  //      // ... 
  //  		},
  show : function( ) { 
  	console.log('I AM MATTER!!!!');
  },
  hide : function( ) {
       // ... 
  },
   update : function( content ) { 
       // ...
   }
};

$.fn.matter = function( method ) {

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


// Некоторое время спустя...
// $('#fun').matter('show');