function toggleSidebar() {
    var side = document.getElementById('sidebar');
    var main = document.getElementById('content');
    side.classList.toggle('active');
    main.classList.toggle('active');
    var over = document.getElementsByClassName('overlay');
    over[0].classList.toggle('active');


    var drop = document.getElementsByClassName('collapse list-unstyled');
    for(var i = 0; i < drop.length; i++) {
        drop[i].classList.remove('show');
    }
}