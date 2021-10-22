let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('#sidebar');
let main = document.querySelector('.main');


toggle.onclick = function(){
    navigation.classList.toggle('active');
}
