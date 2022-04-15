window.addEventListener('load',()=>{
    if(window.location.pathname.includes('/bpm')){
        const current = document.querySelector('#bpm-row th:nth-child(30)')
        current.id = 'current-bpm-show'
        document.querySelector('.scroll-link').click()
    }
})
