window.addEventListener('load',()=>{
    const table = document.getElementById('table')
    if(window.location.pathname.includes('/bpm')){
        table.scrollLeft = 1200
    }
})
