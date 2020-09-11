
function formVerif()
{
    let nom = document.getElementById('nom') ;
    let prenim = document.getElementById('prenom') ;
    if(nom.value.length == 0)
    {
        alert('Veuillez saisir le nom');
        nom.focus() ;
        return false;
    }
    if(prenom.value.length == 0)
    {
        alert('Veuillez saisir le prenom');
        prenom.focus() ;
        return false;
    }
    
    console.log("helloo");
    // document.getElementById('formvalidation').submit()  
    return true;
}