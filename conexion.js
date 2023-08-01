
var db = firebase.firestore();
function guardarDato(numero){
 return db.collection("users").add({
    numero: numero
});
}
const input_numero =document.getElementById("txt1");
const botton = document.getElementById("btnenviar");

button.addEventListener("click", function(){
    let numero = input_numero.value;
    guardarDato(numero).then(function(docRef) {
        console.log('se agrego elelemento')
    }).catch(function(error){
console.log(error);
    })
})
