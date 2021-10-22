function show(show, hide1,hide2){
    document.getElementById(show).style.display = 'flex';
    document.getElementById(hide1).style.display = 'none';
    document.getElementById(hide2).style.display = 'none';

}
function edit_info(info_content,fullname,phone,messagefname,messagephone){
    document.getElementById(info_content).style.display = 'flex';
    document.getElementById(messagefname).style.display = 'flex';
    document.getElementById(messagephone).style.display = 'flex';
    document.getElementById(fullname).disabled = false;
    document.getElementById(phone).disabled = false;
    

}