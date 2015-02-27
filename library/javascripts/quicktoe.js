var search_form  = document.getElementById('quick-search-form');
search_form.addEventListener('submit', function(e){
   var search_input = document.getElementById('search-input');
   var search_query = search_input.value.trim();
   var url_encode_search = search_query.replace(/\s+/g, '-').toLowerCase();
   history.pushState('search_query', "Quick Search"  + search_query, '../../../../../../../../../../../../test/thomas/library/partials/header/search/' + url_encode_search + '/');  
   e.preventDefault();
}); 