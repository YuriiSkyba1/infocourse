console.log("df")
document.getElementById('hamburger').onclick = function() {
    document.querySelector('#nav__menu__mobile').style.display = "block";
    document.querySelector('body').style.overflow = "hidden";
    document.getElementById('close').onclick = function() {
        document.querySelector('#nav__menu__mobile').style.display = "none";
        document.querySelector('body').style.overflow = "scroll";

    }
}

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("search__for__service__list__item");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("search__for__service__tab__item");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "flex";
    evt.currentTarget.className += " active";
}



let parkBg = document.querySelector('#park');
let sthBg = document.querySelector('#sth');
let arenaBg = document.querySelector('#arena');
let test = arenaBg.style.backgroundImage;
let proba = sthBg.style.backgroundImage;
if (test == 'url("/img/it arena.png")') {

    console.log(test)
    document.querySelector('.arrow__left').onclick = function() {
        arenaBg.style.backgroundImage = "url('/img/it park.png')";
        parkBg.style.backgroundImage = "url('/img/it arena.png')";
        sthBg.style.backgroundImage = "url('/img/it sth.png')";
        let test2 = arenaBg.style.backgroundImage;
        let test3 = parkBg.style.backgroundImage;
        if (test2 == 'url("/img/it park.png")' && test3 == 'url("/img/it arena.png")') {
            document.querySelector('.arrow__left').onclick = function() {
                arenaBg.style.backgroundImage = "url('/img/it sth.png')";
                parkBg.style.backgroundImage = "url('/img/it arena.png')";
                sthBg.style.backgroundImage = "url('/img/it park.png')";
                let test4 = arenaBg.style.backgroundImage;
                console.log(test4)
                let test5 = parkBg.style.backgroundImage;
                if (test4 == 'url("/img/it sth.png")' && test5 == 'url("/img/it arena.png")') {
                    document.querySelector('.arrow__left').onclick = function() {
                        arenaBg.style.backgroundImage = "url('/img/it arena.png')";
                        parkBg.style.backgroundImage = "url('/img/it park.png')";
                        sthBg.style.backgroundImage = "url('/img/it sth.png')";

                    }

                }

            }



        }


    }


}
if (test == 'url("/img/it arena.png")') {
    document.querySelector('.arrow__right').onclick = function() {
        arenaBg.style.backgroundImage = "url('/img/it sth.png')";
        parkBg.style.backgroundImage = "url('/img/it arena.png')";
        sthBg.style.backgroundImage = "url('/img/it park.png')";
        let test2 = arenaBg.style.backgroundImage;
        let test3 = parkBg.style.backgroundImage;
        if (test2 == 'url("/img/it sth.png")' && test3 !== 'url("/img/it arena.png")') {
            document.querySelector('.arrow__right').onclick = function() {
                arenaBg.style.backgroundImage = "url('/img/it park.png')";
                parkBg.style.backgroundImage = "url('/img/it sth.png')";
                sthBg.style.backgroundImage = "url('/img/it arena.png')";

            }
        }

    };
}

console.log("df")