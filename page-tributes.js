function search_input(){
    var search_el = document.getElementsByClassName('nfp-search-bar')[0];
    all_cards = document.getElementsByClassName('nfp-card-wrapper');
    cards_to_show = document.querySelectorAll('[tribute_title*="'+search_el.value+'" i],[individual_full_name*="'+search_el.value+'" i], [individual_first_name*="'+search_el.value+'" i], [individual_last_name*="'+search_el.value+'" i]');
    for (var i=0;i<all_cards.length;i++){
        var this_card = all_cards[i];
        var match = false;
        for (var j=0;j<cards_to_show.length;j++){
            if (this_card==cards_to_show[j]){
                match = true;
            } 
        }
        if (match){
            this_card.style.display = 'block'
        } else {
            this_card.style.display = 'none'
        }
        if (search_el.value == ''){
            this_card.style.display = 'block';
        }
    }
    
}

