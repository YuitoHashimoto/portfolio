window.onload = () => {
    const navBtn = document.getElementById('navBtn'),
          navContent = document.getElementById('navContent'),
          navBack = document.getElementById('navBack');

    let flag = true;

    // navBtnクリック時にnavコンテンツ表示
    navBtn.addEventListener('click', () => {
        if (flag === true) {
            navBtn.style.top = "-13.0rem"
            navContent.style.right = "0"

            navContent.ontransitionend = () => {
                flag = false
                navContent.style.transition = "0.5s ease-in-out"
                navBtn.style.transition = "1.0s ease-in-out"
            }
        }
    });

    // navBackクリック時にnavContent非表示
    navBack.addEventListener('click', () => {
        if (flag === false) {
            navContent.style.right = "-18vw"
            navBtn.style.top = "0"

            navBtn.ontransitionend = () => {
                flag = true
                navBtn.style.transition = "0.5s ease-in-out"
                navContent.style.transition = "1.0s ease-in-out"
            }
        }
    })
}