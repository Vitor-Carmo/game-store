const search = document.querySelectorAll('.search');

function searchGenre(event) {
    const search = (event.path[0].innerHTML)

    //pegando toda a url do server e separando por '/' em um array
    allUrl = event.path[8].baseURI.split('/')
    //pegando a posição que vem antes do nome do arquivo
    //exemplo client/index.php -> client
    whereAmI = allUrl[(allUrl.length) - 2]

    // se essa pasta for a do client então ele vai direcionar para o search
    //conforme tem que ir referenciando a pasta client
    // caso contrário está no index.php ou no register.php que estão no mesmo nivel de pastas
    if(whereAmI =='client'){
        window.location.href = '../../src/search.php?search='+search+''
    }else {
        window.location.href = 'src/search.php?search='+search+''
    }
    
}
    


for (const item of search){
    item.addEventListener("click", searchGenre)
}
