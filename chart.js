

const form = document.querySelector(".alter-footer"),
inputField = form.querySelector(".input-field"),
sendBtn    = form.querySelector("button"),
alterBody  = document.querySelector(".alter-body");


form.onsubmit = (e)=>{
    e.preventDefault();

}

sendBtn.onclick = ()=>{

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "insert_mess.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){

                inputField.value = "";
            }
        }
    }

    let formData = new FormData(form);
    xhr.send(formData); 
}


setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "select_message.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){

                let data = xhr.response;
                alterBody.innerHTML = data;
            }
        }
    }

    let formData = new FormData(form);
    xhr.send(formData);
}, 200);