let personne = document.getElementById("personne");
let morale = document.getElementById("morale");
let p1 = document.getElementById("p1");
let p2 = document.getElementById("p2");
let p3 = document.querySelector("#piece");
let p4 = document.querySelector("#sexe");
let p5 = document.getElementById("p5");
let m1 = document.getElementById("m1");
let m2 = document.getElementById("m2");
let m3 = document.getElementById("m3");
let m4 = document.getElementById("m4");

personne.addEventListener('click', function(){
    morale.checked = false
})
morale.addEventListener('click', function(){
    personne.checked = false
})
if(personne.checked){
    m1.disabled = true
    m2.disabled = true
    m3.disabled = true 
    m4.disabled = true 
    p1.disabled = false
    p2.disabled = false
    p3.disabled = false
    p4.disabled = false
    p5.disabled = false
    m1.style.background = "gray";
    m2.style.background = "gray";
    m3.style.background = "gray";
    m4.style.background = "gray";
    
}else if(morale.checked){
    m1.disabled = false
    m2.disabled = false
    m3.disabled = false
    m4.disabled = false 
    p1.disabled = true
    p2.disabled = true 
    p5.disabled = true
    p3.disabled = true
    p4.disabled = true
    p1.style.background = "gray";
    p2.style.background = "gray";
    p5.style.background = "gray";
    p3.style.background = "gray";
    p4.style.background = "gray";
    m1.style.background = "none";
    m2.style.background = "none";
    m3.style.background = "none";
    m4.style.background = "none";
}else{
    m1.disabled = false
    m2.disabled = false
    m3.disabled = false 
    m4.disabled = false 
    p1.disabled = false
    p2.disabled = false
    p5.disabled = false
    p3.disabled = false
    p4.disabled = false
}

morale.addEventListener('change', function(){
    if(morale.checked){
        p1.disabled = true
        p2.disabled = true 
        p4.disabled = true
        p5.disabled = true
        p3.disabled = true
        m1.disabled = false
        m2.disabled = false
        m3.disabled = false
        m4.disabled = false
        p1.style.background = "gray";
        p2.style.background = "gray";
        p5.style.background = "gray";
        p3.style.background = "gray";
        p4.style.background = "gray";
        m1.style.background = "none";
        m2.style.background = "none";
        m3.style.background = "none";
        m4.style.background = "none";
    }else if(personne.checked){
        p1.disabled = false
        p2.disabled = false
        p4.disabled = false
        p5.disabled = false
        p3.disabled = false
        m1.disabled = true
        m2.disabled = true
        m3.disabled = true 
        m4.disabled = true 
        p1.style.background = "none";
        p2.style.background = "none";
        p5.style.background = "none";
        p3.style.background = "none";
        p4.style.background = "none";
        m1.style.background = "gray";
        m2.style.background = "gray";
        m3.style.background = "gray";
        m4.style.background = "gray";
    }
    else{
        m1.disabled = false
        m2.disabled = false
        m3.disabled = false 
        m4.disabled = false 
        p1.disabled = false
        p2.disabled = false
        p4.disabled = false
        p5.disabled = false
        p3.disabled = false
    }
})
personne.addEventListener('change', function(){
    if(personne.checked){
        m1.disabled = true
        m2.disabled = true
        m3.disabled = true 
        m4.disabled = true 
        p1.disabled = false
        p2.disabled = false
        p4.disabled = false
        p5.disabled = false
        p3.disabled = false
        p1.style.background = "none";
        p2.style.background = "none";
        p5.style.background = "none";
        p3.style.background = "none";
        p4.style.background = "none";
        m1.style.background = "gray";
        m2.style.background = "gray";
        m3.style.background = "gray";
        m4.style.background = "gray";
    }else if(morale.checked){
        m1.disabled = false
        m2.disabled = false
        m3.disabled = false
        m4.disabled = false 
        p1.disabled = true
        p2.disabled = true 
        p4.disabled = true
        p5.disabled = true
        p3.disabled = true
        p1.style.background = "gray";
        p2.style.background = "gray";
        p5.style.background = "gray";
        p3.style.background = "gray";
        p4.style.background = "gray";
        m1.style.background = "none";
        m2.style.background = "none";
        m3.style.background = "none";
        m4.style.background = "none";
    }else{
        m1.disabled = false
        m2.disabled = false
        m3.disabled = false 
        m4.disabled = false 
        p1.disabled = false
        p2.disabled = false
        p4.disabled = false
        p5.disabled = false
        p3.disabled = false
    }
})