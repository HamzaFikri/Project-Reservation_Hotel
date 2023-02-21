// var nav = document.querySelector('nav');

// window.addEventListener('scroll', function () {
//   if (window.pageYOffset > 100) {
//     nav.classList.add('bg-dark', 'shadow');
//   } else {
//     nav.classList.remove('bg-dark', 'shadow');
//   }
// });
let cont = document.querySelector('#cont')
let addbat = document.querySelector('#Addbatiment')
let i = 1;
let nbrchambre=1;
let nbrbatiemnt=1;
let nbrenfant=1;

function hotel() {
var a = document.querySelector(".typebatiment");
if (a.value == "hotel") {
  cont.innerHTML =
      `<div class="row">
      <div class="col-12 col-md-3 mb-4"> 
       <img src="img/add-256.png" width="60" height="60" onclick="addchambre()">
       <label class="form-label" for="Addbat">Ajouter autre Chambre
       :</label>
      </div>
      
      <div class="col-12 col-md-2 mb-4">
      <div class="form-outline">
     <input type="number"  id="nbenfant" required class="form-control is-invalid" min=0 max=6 onkeyup=addenfant() >
     
     <label class="" for="nbr enfant">Nbr Enfant :</label>
      </div>
    </div>
      </div>
      <div class="newchambre1 row">
      <div class="col-12 col-md-2 mb-4">
       <div class="form-outline">
        <input type="number" id="nbr-chambre" name="chambre[1][nbr]" required class="form-control is-invalid" min=0> 
        <label class="form-label" for="form6Example1">Nbr Chambre :</label>
         </div>
          </div> 
          <div class="col-12 col-md-3 mb-4"> 
          <div class="form-outline"> 
          <select id ="typechambre1" name="chambre[1][typechambre]"  class="newchambre1 form-control is-invalid" required> 
          <option value="" disabled selected>Type chambre</option>
           <option value="Simple">Simple</option> 
           <option  value="Double">Double</option>
            </select> 
            <label class="form-label" for="form6Example1">Type de chambre :</label>
             </div>
              </div>
               <div class="col-12 col-md-2 mb-4">
                <div class="lit-type1 form-outline">
                  </div>
                  </div> 
                    <div class="col-12 col-md-2 mb-4">
                     <div class="vue-type1 form-outline">
                     
                     </div>
                    </div>
                                  <div class="col-12 col-md-3 mb-4">
                                      <div class="form-outline">
                                          <select id="Pension1" name="pension[1][type]" class="form-control is-invalid"
                                              required>
                                              <option value="" disabled selected>Selectioner type de
                                                  Pension</option>
                                              <option value="13">Complet</option>
                                              <option value="14">Petit dejeuner / Dejeuner</option>
                                              <option value="15">Petit dejeuner / Diner</option>
                                              <option value="16">Sans</option>
                                          </select>
                                          <label class="form-label" for="pension">Type de Pension
                                              :</label>
                                      </div>
                                  </div>
                               
                    </div>
                    </div>
                          `;
} else {
  cont.innerHTML = '';
}
}

function addchambre()
{
    i++;
    nbrchambre++;
    var add=document.createElement("div");


    if(nbrchambre<=3)
    {

    add.innerHTML +=`<div class="newchambre${i} row">
            <div class="col-12 col-md-2 mb-4">
             <div class="form-outline">
              <input type="number" id="nbr-chambre${i}"name="chambre[${i}][nbr]" required class="form-control is-invalid" min=0> 
              <label class="form-label" for="form6Example1">Nbr Chambre :</label>
               </div>
                </div> 
                <div class="col-12 col-md-3 mb-4"> 
                <div class="form-outline"> 
                <select id ="typechambre${i}" name="chambre[${i}][typechambre]" class="form-control is-invalid" required> 
                <option value="" disabled selected>Type chambre</option>
                 <option value="Simple">Simple</option> 
                 <option value="Double">Double</option>
                  </select> 
                  <label class="form-label" for="form6Example1">Type de chambre :</label>
                   </div>
                    </div>
                     <div class="col-12 col-md-2 mb-4">
                      <div class="lit-type${i} form-outline">
                        </div>
                        </div> 

                          <div class="col-12 col-md-2 mb-4">
                           <div class="vue-type${i} form-outline">
                           

                          </div>
                          </div>
                                        <div class="col-12 col-md-3 mb-4">
                                            <div class="form-outline">
                                                <select id="Pension${i}" name="pension[${i}][type]" class="form-control is-invalid"
                                                    required>
                                                    <option value="" disabled selected>Selectioner type de
                                                        Pension</option>
                                                    <option value="13">Complet</option>
                                                    <option value="14">Petit dejeuner/Deje</option>
                                                    <option value="15">Petit dejeuner/Dine</option>
                                                    <option value="16">Sans</option>
                                                </select>
                                                <label class="form-label" for="pension">Type de Pension
                                                    :</label>
                                        
                                        </div>
                                        </div>
                          </div> `
                         
}
cont.insertAdjacentElement('beforeend',add)
}
     
function addbatiment() {
    nbrbatiemnt++
      var add=document.createElement("div");
    if(nbrbatiemnt<=3)
    {
    add.innerHTML +=
        `  
        <div class="col-12 col-md-4 mb-4">
        <div class="form-outline">
            <select class="typebatiment form-control is-invalid" name="typebatiment[${nbrbatiemnt}][typebatiment]"required 
                onchange="hotel()">
                <option value="" disabled selected>Selectioner type de
                    reservation</option>
                <option value="11">Appartements</option>
                <option value="12">Bungalow</option>
            </select>
            <label class="form-label" for="form6Example1">Type de Batiment
                :</label>
        </div>
    </div>  
                                    `;
                                    addbat.insertAdjacentElement('beforeend',add)
    }
    
}     
              
document.addEventListener('change',(e)=>{
    
    for(let j = 1 ; j<=i ; j++){
    if(e.target.id == `typechambre${j}` && (e.target.value == 'Double')){
        document.querySelector(`.vue-type${j}`).innerHTML = ``
        document.querySelector(`.lit-type${j}`).innerHTML = `
        <select id="typelit${j}" name="chambre[${j}][typelit]"  class="form-control is-invalid" required>
                        <option value="" disabled selected>Selectionner type de lit </option>
                         <option value="litdouble">lit double</option>
                          <option value="2lit-simple">2 lit simple</option>
                         </select> 
                         <label class="form-label" for="typelit">Type lit :</label> 
        `;

    }
    else if(e.target.id == `typechambre${j}` && (e.target.value == 'Simple')){
        document.querySelector(`.lit-type${j}`).innerHTML = ``
        document.querySelector(`.vue-type${j}`).innerHTML = `
        <select id="typevue${j}" name="chambre[${j}][vue]"  class="form-control is-invalid" required> 
                           <option value="" disabled selected>Selectionner type de vue </option>
                            <option value="interieur">Interieur</option> <option value="Exterieur">Exterieur</option>
                             </select>
                              <label class="form-label" for="vue">Type de vue :</label>
        `;
    }
}
})

document.addEventListener('change',(e)=>{
    for(let j = 1 ; j<=i ; j++){
    if(e.target.id ==  `typelit${j}` && e.target.value == 'litdouble'){
        document.querySelector(`.vue-type${j}`).innerHTML = ``
        document.querySelector(`.vue-type${j}`).innerHTML = `
        <select id="typevue${j}" name="chambre[${j}][vue]"  class="form-control is-invalid" required> 
         <option value="" disabled selected>Selectionner type de vue </option>
                            <option value="Interieur">Interieur</option> 
                            <option value="Exterieur">Exterieur</option>
                             </select>
                              <label class="form-label" for="vue">Type de vue :</label>    
        `;

    }
    if(e.target.id ==  `typelit${j}` && e.target.value == '2lit-simple'){
        document.querySelector(`.vue-type${j}`).innerHTML = ``
        document.querySelector(`.vue-type${j}`).innerHTML = `
        <select id="typevue${j}" name="chambre[${j}][vue]"  class="form-control is-invalid" required> 
                           <option value="" disabled selected>Selectionner type de vue </option>
                            <option value="Interieur">Interieur</option> 
                             </select>
                              <label class="form-label" for="vue">Type de vue :</label>
        
        `;

    }
}
})
function addenfant()
{
    const nbrenf = document.getElementById('nbenfant').value;
    nbrenfant=nbrenf
    document.querySelector('.enfants').innerHTML = ''
    for(let a = 1 ; a<= nbrenf ; a++){ 
        document.querySelector(".enfants").innerHTML += 
`
        <div class="newchambre${a} row">
        <div class="col-12 col-md-2 mb-4">
         <div class="form-outline">
         <input type="number" required class="form-control is-invalid"  min="1" max="17"  id="id-age${a}"> 
         <label class="form-label" for="form6Example1">age enfant ${a} </label>
            </div> </div>
            <div class="col-12 col-md-6 mb-4"> 
            <div class="form-outline" id="type-lit-enf${a}"> 
            </div></div</div>`
      
    }
}

document.addEventListener("input", function(e){ 
    for(let g = 1  ; g<= nbrenfant; g++)
    {
        if(e.target.id == `id-age${g}` && (e.target.value <= 2 &&  e.target.value >= 0)){

            document.getElementById(`type-lit-enf${g}`).innerHTML = 
            `
            <label for="">Selectionner offre:
            <select name="chambreenf[${g}][type]"  class="enf-option form-control is-invalid" required>
            <option value=""  disabled selected>--Selectionner type batiment--</option>
            <option value="6">Supplement lit </option>
            <option value="7">Pas Supplement lit </option>
            </select>
            </label>
            `
    }
        else if(e.target.id == `id-age${g}` && (2 <e.target.value && e.target.value < 14)){
            document.querySelector(`#type-lit-enf${g}`).innerHTML = 
            `
            <label for="">Selectionner offre:
            <select  name="chambreenf[${g}][type]" class="enf-option form-control is-invalid" required>
            <option value=""  disabled selected>--Selectionner type batiment--</option>
            <option value="8">50% chambre simple</option>
            </select>
            </label>
            `
        
    }

        else if(e.target.id == `id-age${g}` && (e.target.value >= 14 && e.target.value < 18)){
            document.querySelector(`#type-lit-enf${g}`).innerHTML = 
         `
            <label for="">Selectionner offre:
            <select  name="chambreenf[${g}][type]"  class="enf-option form-control is-invalid" required>
            <option value=""  disabled selected>--Selectionner type batiment--</option>
            <option value="1">chambre simple</option>
            <option value="9>70% chambre simple</option>
            </select>
            </label>
            `

        }
    }
    })

