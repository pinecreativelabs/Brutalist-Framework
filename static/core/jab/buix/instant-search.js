let cards = document.querySelectorAll('.searchable')  
function liveSearch() {
    let search_query = document.getElementById("instant-search").value;
    
    //Use innerText if all contents are visible
    //Use textContent for including hidden elements
    for (var i = 0; i < cards.length; i++) {
        if(cards[i].textContent.toLowerCase()
                .includes(search_query.toLowerCase())) {
            cards[i].classList.remove("hidden");
        } else {
            cards[i].classList.add("hidden");
        }
    }
}
let typingTimer;               
let typeInterval = 500;  
let searchInput = document.getElementById('instant-search');
searchInput.addEventListener('keyup', () => {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(liveSearch, typeInterval);
});
