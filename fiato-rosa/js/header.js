(function(){
    
    let rosePray = document.querySelector('.rose')
    let roseMenu = document.querySelector('.rose-menu')
    let roseA = document.querySelector('.rose-a')
    
    let style = getComputedStyle(roseMenu)

    /*****
    Zobrazenie a skrytie submenu na hover
    *****/
        rosePray.addEventListener('mouseenter', function(event) {
            roseMenu.style.display = 'block'
    })

    rosePray.addEventListener('mouseleave', function(event) {
        roseMenu.style.display = 'none'
    })

    /*****
    Menu - on click
    *****/
    roseA.addEventListener('click', function(event){
        event.preventDefault()
        
    })
    
})()