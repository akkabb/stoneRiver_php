$(document).ready(function(){
    $('.autosuggest').keyup(function() {
        // alert('It works !')
        let search_term = $(this).attr('value');
        alert(search_term);
        $.post('ajax/search.php',{search_term:search_term}, function(data){
            // alert(data);
            $('.result').html(data);
        })
    })
})



// $('result li').click(function() {
//     let result_value = $(this).text();
//     $('.autosuggest').attr('value', result_value);
//     $('.result').html('');
// })