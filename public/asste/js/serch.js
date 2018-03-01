// $(function() {
//     $( "#search").autocomplete({
//         minLength: 1,
//         source: function (query, response) {
//           $.ajax({
//             type: "GET",
//             data: { query: query},
//             dataType: "json",
//             url: '/api/SearchBook',
//               success: function( data ) {
//                    response( $.map( data.results, function( result ) {
//                        return {
//                            label:  result.label,
//                            imgsrc: result.image
//                        }
//                    }));
//                }
//            });
//         }
//       }).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
//              return $( "<li></li>" )
//                  .data( "item.autocomplete", item )
//                  .append( "<a>" + "<img style='width:25px;height:25px' src='" + item.imgsrc + "' /> " + item.label+ "</a>" )
//                  .appendTo( ul );
//          }
// });

$(function() {
    $("#search").autocomplete({
        minLength: 1,
        source: function (query, response) {
          $.ajax({
            type: "GET",
            data: { query: query},
            dataType: "json",
            url: '/api/SearchBook',
              success: function( data ) {
                response( $.map( data, function( item ){
                       return {
                           title:  item.title,
                           image: item.image,
                           url:  item.url,
                       }
                   }));
               }
           });
        },
        select: function( event, ui ) {
            window.location.href = ui.item.url;
        }
      }).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
          var inner_html = '<a href="' + item.url + '" ><div class="list_item_container"><div class="image"><img src="' + item.image + '" ></div><div class="label"><h4><b>' + item.title + '</b></h4></div></div></a>';
          return $( "<li></li>" )
                  .data( "item.autocomplete", item )
                  .append(inner_html)
                  .appendTo( ul );
      };
  });
