function openNav() {
    if(window.innerWidth <= 1000){
        document.getElementById("sidenav").style.width = "30%";
    }else{
        document.getElementById("sidenav").style.width = "15%";
    }
    document.querySelector(".usericon").style.setProperty('display', 'none');
    document.querySelector('.info-sidenav img').style.setProperty('width', '70px');
    document.querySelector('.info-sidenav img').style.setProperty('height', '70px');
}
  
function closeNav() {
    document.getElementById("sidenav").style.width = "0";
    document.querySelector('.usericon').style.setProperty('display', 'block');
}

continue_reading();
function continue_reading(){

    div = document.querySelector(".articles-container");
    a = div.querySelectorAll(".expand-post");
    sectionCreated = div.querySelectorAll(".article");
    articleAndText = div.querySelectorAll('.article-text');

    for (let i = 0; i < a.length; i++){
        a[i].addEventListener("click", open);
    }

    buttonSettings();
}

var btn1
var btn2;
var btnSection;

function buttonSettings(){
    btn1 = document.querySelectorAll(".buttonSection button[name='green']");
    btn2 = document.querySelectorAll(".buttonSection button[name='red']");

    for(let i = 0; i < btn1.length; i++){
        btn1[i].addEventListener('click', like);
        btn2[i].addEventListener('click', dislike);
    }

    btnSection = document.querySelectorAll(".buttonSection");

    fetch("check_liked").then(onLikeCheck).then(onJSONCheck);

}

function onLikeCheck(response){
    return response.json();
}

function onJSONCheck(json){

    for(let i = 0; i < json.length; i++){

        for(let j = 0; j < btn1.length; j++){

            if(""+json[i].post+"" === btn1[j].id){
                btn1[j].classList.add('green');
                btn1[j].removeEventListener('click', like);
            }
        }

    }

}

function like(event){

    var likebutton_selected = event.srcElement;

    for(let i = 0; i < btnSection.length; i++){

        if(btnSection[i].id === event.srcElement.id){

            if(btnSection[i].querySelector(".buttonSection button[name='red']").classList.contains('red')){
                btnSection[i].querySelector(".buttonSection button[name='red']").classList.remove('red');
            }

            likebutton_selected.classList.add('green');
            likebutton_selected.removeEventListener('click', like);
            btnSection[i].querySelector(".buttonSection button[name='red']").addEventListener('click', dislike);

            likePost(event);

        }
    }   
}

function likePost(event){

    button = event.currentTarget;

    var post_id = button.parentNode.parentNode.dataset.id;

    fetch("like_post/" + post_id).then(onLikeResponse).then(onJSONLikes);
}

function dislike(event){

    var dislikebutton_selected = event.srcElement;

    for(let i = 0; i < btnSection.length; i++){

        if(btnSection[i].id === event.srcElement.id){
            
            if(btnSection[i].querySelector(".buttonSection button[name='green']").classList.contains('green')){
                btnSection[i].querySelector(".buttonSection button[name='green']").classList.remove('green');
            }
    
            dislikebutton_selected.classList.add('red');
            dislikebutton_selected.removeEventListener('click', dislike);
            btnSection[i].querySelector(".buttonSection button[name='green']").addEventListener('click', like);

            dislikePost(event);

        }
    }
}

function dislikePost(event){

    button = event.currentTarget;

    var post_id = button.parentNode.parentNode.dataset.id;

    fetch("dislike_post/" + post_id).then(onLikeResponse).then(onJSONLikes);
}

function onLikeResponse(response){
    return response.json();
}

function onJSONLikes(json){

    var buttonID = json.post_id;

    for(let i = 0; i < btnSection.length; i++){

        if(btnSection[i].id === buttonID){

            btnSection[i].querySelector('span').textContent = json.total_likes;

        }

    }
    eraseCookie("post_id");
}

function open(event){
    var a_Selected = event.srcElement;
    for(let i = 0; i < sectionCreated.length; i++){
        if(a_Selected.textContent === "Continue reading..."){
            if(sectionCreated[i].id === a_Selected.id){
                a_Selected.innerHTML = "Reduce";
                articleAndText[i].style.setProperty('display', 'flex');
                let divHeight = articleAndText[i].clientHeight;
                let newHeight = divHeight + sectionCreated[i].clientHeight - 30 + "px";
                sectionCreated[i].style.setProperty('height', newHeight);
            }
        }else{
            if(sectionCreated[i].id === a_Selected.id){
                a_Selected.innerHTML = "Continue reading...";
                if(window.innerWidth <= 1000){
                    sectionCreated[i].style.setProperty('height', "750px");
                }else{
                    sectionCreated[i].style.setProperty('height', "450px");
                }
                articleAndText[i].style.setProperty('display', 'none');
            }
        }
    }
}

var form = document.forms['search'];
var modaldiv = document.querySelector(".modal-content");
var inputSearch = form.querySelector(".search-input");
var modal = document.querySelector("#Modal");;
form.addEventListener('submit', search);

function search(event){
    event.preventDefault();
    
    fetch('search').then(onResponse).then(onJSON);
}

function onResponse(response){
    return response.json();
}

function onJSON(json){

    var check = 0;

    for(let i=0; i < json.length; i++){

        var imgHref = "../storage/app/public/article_img/" + json[i].img + ".jpg";
        var title = json[i].title;
        var heading = json[i].heading;
        var type = json[i].type;
        var alt = type + " news";
        var CONTINUE = "Continue reading...";

        if(json[i].title.toLowerCase().includes(inputSearch.value.toLowerCase())){

            if(document.querySelector('title').textContent.toLowerCase() === "home"){
                var aContainer = document.createElement('a');
                var id = i+1;
                aContainer.setAttribute('href', "#" + id);
                aContainer.classList.add('no-decoration');
                aContainer.addEventListener('click', close);
    
                var sec = document.createElement('section');
                sec.setAttribute('id', i+1);
                sec.classList.add('modal-article');
        
                var img = document.createElement('img');
                img.setAttribute('src', imgHref);
                img.setAttribute('alt', alt);
        
                var h2 = document.createElement('h2');
                h2.classList.add('margin');
                h2.setAttribute('id', "title");
                h2.textContent = title;
        
                var spanHeading = document.createElement('span');
                spanHeading.classList.add('margin');
                spanHeading.setAttribute('id', "paragraph");
                spanHeading.textContent = heading;
        
                sec.appendChild(img);
                sec.appendChild(h2);
                sec.appendChild(spanHeading);
    
                aContainer.appendChild(sec);
        
                modaldiv.appendChild(aContainer);
            }else{

                if(document.querySelector('title').textContent.toLowerCase() === type){
                    var aContainer = document.createElement('a');
                    var id = i+1;
                    aContainer.setAttribute('href', "#" + id);
                    aContainer.classList.add('no-decoration');
                    aContainer.addEventListener('click', close);
        
                    var sec = document.createElement('section');
                    sec.setAttribute('id', i+1);
                    sec.classList.add('modal-article');
            
                    var img = document.createElement('img');
                    img.setAttribute('src', imgHref);
                    img.setAttribute('alt', alt);
            
                    var h2 = document.createElement('h2');
                    h2.classList.add('margin');
                    h2.setAttribute('id', "title");
                    h2.textContent = title;
            
                    var spanHeading = document.createElement('span');
                    spanHeading.classList.add('margin');
                    spanHeading.setAttribute('id', "paragraph");
                    spanHeading.textContent = heading;
            
                    sec.appendChild(img);
                    sec.appendChild(h2);
                    sec.appendChild(spanHeading);
        
                    aContainer.appendChild(sec);
            
                    modaldiv.appendChild(aContainer);
                }


            }

        }else{

            check = check + 1;            

        }

    }

    console.log(check);


    if (check == json.length){

        alert("Non è presente nessun articolo che contiene '" + inputSearch.value + "'");
        
    }else{

        modal.style.setProperty('--modal-display', 'block');
        document.querySelector('body').style.setProperty('--overflow-body', 'hidden');

    }

}

function close(){
    modal.style.setProperty('--modal-display', 'none');
    document.querySelector('body').style.setProperty('--overflow-body', 'auto');
    inputSearch.value = "";

    while(modaldiv.firstChild){

        modaldiv.removeChild(modaldiv.lastChild);

    }
}

window.addEventListener("click", function(event) {
    if(event.target == modal){

        modal.style.setProperty('--modal-display', 'none');
        document.querySelector('body').style.setProperty('--overflow-body', 'auto');
        inputSearch.value = "";
        
        while(modaldiv.firstChild){

            modaldiv.removeChild(modaldiv.lastChild);

        }
    }
});